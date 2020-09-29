<?php
if(isset($_POST['signup-submit'])){

    
	$email = $_POST['email'];
	$name = $_POST['name'];
	$password = $_POST['password'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','login_details');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	}
	 else 
	{
		$stmt = $conn->prepare("insert into login(email, name, password) values(?, ?, ?)");
		$stmt->bind_param("sss", $email, $name, $password);
		$execval = $stmt->execute();
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
    }
}
?>



