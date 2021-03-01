<?php 

session_start();

$username="admin";
$password="efty";

if (isset($_POST['uname'])) {
  if ($_POST['uname']==$username && $_POST['pass']==$password) {
    $_SESSION['uname'] = $username;
    header("location:E.php");
  }
  else{
    $msg="username or password invalid";
    echo "<script>alert('uname or pass incorrect!')</script>";
  }

}

 ?>
 <?php
 include('name.php');
 ?>
<fieldset>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  <table align="">
    
    <tr>
      <th colspan="2"><h2>Login</h2></th>
    </tr>
    <?php if(isset($msg)){?>
        <tr>
          <td colspan="2" align="" valign="top"><?php echo $msg;?></td>
        </tr>
      <?php } ?>
    <tr>
      <td>username</td>
      <td><input type="text" name="uname"></td>
    </tr>
    <tr>
      <td>password</td>
      <td><input type="password" name="pass"></td>
    </tr>
    <tr>
      <td align="right" colspan="2"><input type="submit" name="Submit" value="submit"></td>
    </tr>
  </table>
  <input  type="checkbox"  name="remember" value="remembered">
         <label for="remember">Remember Me</label>
         <br><br>
  <lable align = ""><a href = "D.php">Forgot Password?</a> </lable>
  
</form>
</fieldset>
<?php  
  include('footer.php');
  ?>
