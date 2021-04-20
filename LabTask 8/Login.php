<!DOCTYPE HTML>  
<html>
<head>
  <title>Form Login</title>


<script src="js/jquery.js"></script>  

</head>
<body>
  <fieldset>
 <div> 
<div class="form">
<form method="post" action="<?php echo htmlspecialchars('controller/LoginController.php');?>" autocomplete="off">
<h1>Login</h1>
  <br>
   <div class="form-control">
  <label> User Name: </label>
  <input type="text" size= "30" name="username" id="username" placeholder="Enter your name" onkeyup="checkUsername()" onblur="checkUsername()" >
  <span class="error" id="usernameErr"><?php if(!empty($_GET['usernameErr'])){echo $_GET['usernameErr'];} ?></span></div>
  <br>

 <div class="form-control">
  <label>Password:</label>
  <input type="password" size="30" name="password" id="password" placeholder="Enter your password" onkeyup="checkPass()" onblur="checkPass()" >
  <span class="error" id="passwordErr"><?php if(!empty($_GET['passErr'])){echo $_GET['passErr'];} ?></span></div>
  <br>
  <hr>

  <input type="submit" name="submit" value="Submit" size="30">&nbsp;

   
  <a href="ForgotPassword.php" class="active" style="font-size: 17px;color: #4169E1;">Forgot password?</a><br><br><br>


</form></div><br>
</fieldset>
<div>
  <?php include 'Sources/footer.php';?></div><hr>
</div>

</body>
</html>