<!DOCTYPE html>
<html>
<head>
    <link rel = "stylesheet" href = "css/signup2.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    <script src="js/signup2.js"></script>
  </head>
<nav>
  <label class = "logo">meDapp</label>
  <ul>
      <li><a href = "web1.html">Home</a></li>
      <li><a href = "about.html">About</a></li>
      <li><a href = "#">Contact</a></li>
      <li><a href = "login.html">Login</a></li>
  </ul>
</nav>
<div class="wrapper">
    <div class="container">
      
      <div class="signup">Sign Up</div>
      <div class="login">Log In</div>
       <div class="signup-form">
       <form action = "signup.php" method = "post">
          <input type="text" placeholder="Your Email Address" class="input" name="email"> <br />
          <input type="text" placeholder="Choose a Username" class="input" name = "name"> <br />
          <input type="password" placeholder="Choose a Password" class="input" name = "password"><br />
          <input type = "submit" value = "Sign-up"div class="btn" name = "signup-submit"></div>
        
      </form>
       
      
      <div class="login-form">
      <form action = "login.php" method = "post">
          <input type="text" placeholder="Email or Username" class="input" name = "namei"><br />
          <input type="password" placeholder="Password" class="input" name = "passwordi"><br />
          <input type = "submit" value = "Log-In"div class="btn"></div>
       </div>
       </form>
      
    </div>
  </div>

</html>




