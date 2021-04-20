<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script type="text/javascript">
      function validation()
      {
        var username= document.getElementById("username");
        var password= document.getElementById("password");

        //alert("hello");

        if(username.value.trim()=="" )
        {
           document.getElementById("nameErr").innerHTML= "*Username is requied(JS)";
           return false;
        }

        else if(password.value.trim()=="" )
        {
           document.getElementById("passwordErr").innerHTML= "*Password is requied(JS)";
           return false;
        }
        else {

          return true;
        }
      }
    </script>
    <style >


    </style>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Css/Login/loginStudentCss.css">
    <title></title>
  </head>
  <body>





    <form name="loginFrom"  class="loginbox" onsubmit="return validation();" method="post" action="../Controller/loginStudentController.php" >

    <h2>Signin</h2>


        Username: <input type="text" placeholder="Enter Username" name="username" id="username">
        <span class="error" id="nameErr">* <?php if(!empty($_GET['usernameErr'])){echo $_GET['usernameErr'];} ?></span>


        <br>
        Password: <input type="password" placeholder="Enter Password" name="password" id="password">
        <span class="error" id="passwordErr">* <?php if(!empty($_GET['passwordErr'])){echo $_GET['passwordErr'];} ?></span>
        <br>
        <input type="checkbox"  name="remember" value="remembered">
         <label for="remember">Remember Me</label>

         <input type="submit" name="submit" value="Submit">
          <meta ><a href ="forget password.php">Forget Password? </a></meta>

    </form>

  </body>
</html>
