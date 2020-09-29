const ipfsClient = require('ipfs-http-client');
const express = require('express');
const bodyParser = require('body-parser');
const fileUpload= reuire('express-fileupload');

const ipfs = new ipfsClient({ host: 'localhost', port: '5001', protocol: 'http'});
const app = new express();

app.set('view engine', 'ejs');
app.use(bodyParser.urlencoded({extended: true}));
app.use(fileUpload());

app.get('/',(req,res) => {
    res.render('home');
});

// create pages: home.ejs, upload.ejs 

app.post('/upload', (req,res) =>{
    const file = req.files.file;
    const fileName = req.body.fileName;
    const filePath = 'files/' + fileName;

    file.mv(filePath, async (err) => {
        if(err){
            console.log('Error: failed to download file');
            return res.status(500).send(err);
        }

        const fileHash = await addFile(fileName, filePath);
        fs.unlink(filePath, (err) => {
            if (err) console.log(err);
        });

        res.render('upload', { fileName, fileHash });
    });
});

const addFile = async (filename,filepath) => {
    const file = fs.readFileSync(filepath);
    const fileAdded = await ipfs.add({path: filename, content: file});
    const fileHash = fileAdded[0].hash;

    return fileHash;
};

// check port
app.listen(3000, () => {
    console.log('Server is listening on port example(3000)');
});