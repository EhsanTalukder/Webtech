<!DOCTYPE HTML>
<html>

<head>
  <title>Registration</title>
</head>

<body>

    <div class="form">
  <form method="post" action="controller/RegistrationFormController.php">
      
      <h2><span style="font-weight: bold;font-size: 25px;">REGISTRATION:</span></h2><hr><br>
            
            Name: <input type="text" name="name" placeholder="Enter Your Name">
            <br>
            <br>
            E-mail: <input type="text" name="email" placeholder="Enter your Email">
            <br>
            <br>
            User Name: <input type="text" name="username" placeholder="Enter Your Username">
            
            <br>
            <br>
            Password: <input type="Password" name="Password" placeholder="Enter Your Password">
            
            <br>
            <br>
            Confirm Password: <input type="Password" name="confirmpass" placeholder="Retype Your Password">
            
            <br>
            <br>
                Gender:
                <input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="other">Other
                
            <br>
            Date Of Birth
                <input type="date" name="birthday">
                
                <br>
            <br>
            Address:
                <input type="text" name="address" size="40">
                
                <br>
            <br>
            <hr>
            <br>
            <input type="submit" name="submit" value="Submit"> <input type="reset" value="Reset"><br>

</form></div>
<div><?php include 'Sources/footer.php';?></div>
</div>
</body>
</html>