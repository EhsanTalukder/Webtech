<!DOCTYPE HTML>  
<html>
<head>
  <title>Form Login</title>
</head>
<body>  
   

<div class="form">
<form  method="post" enctype="multipart/form-data" action="controller/LoginController.php">
  <fieldset > 
<h2>Login</h2><br>
  <hr><br>
  User Name: 
  <input type="text" size= "35" name="username" placeholder="Enter your name" >
  <br><br>

  Password:
  <input type="password" size="35" name="password" placeholder="Enter your password" >
  
  <br><br>
  <hr>
  <input type="submit" name="submit" value="Submit" size="30">&nbsp;
  <a href="ForgotPassword.php" class="active" style="font-size: 17px;">Forgot password?</a><br><br><br>
  <p style="font-style: italic;font-size: 15px;">Don't have an account?&nbsp;<a href="RegistrationForm.php" class="active" style="font-size: 15px;">Sign Up</a></p> 
</form></div><br><br><br><br><br><br><br>
<div><?php include 'Sources/footer.php';?></div>
</div>

</body>
</html>