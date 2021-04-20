<?php 
session_start();
require_once ('controller/ViewProfileController.php');
$data = fetchPatient($_SESSION['username']);
if($data!=NULL)
{
  foreach ($data as $i => $patient):

       $name= $patient['name'] ;
       $email=$patient['email'];
       $dob=$patient['dateofbirth'];
       $address= $patient['address'] ;
  endforeach;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
  <script src="js/jquery.js" type="text/javascript"></script>

</head>
<body>

<html>



<form method="post" action="<?php echo htmlspecialchars('controller/EditProfileController.php');?>" autocomplete="off">
  <div class="alignment">
<h1>Edit Profile:</h1>
<div class="input"><br>
  Name: <input value="<?php echo $name ?>" type="text" name="name" id="name" onkeyup="checkName()" onblur="checkName()">
 <span class="error" id="nameErr"> <?php if(!empty($_GET['nameErr'])){echo $_GET['nameErr'];} ?></span>
  <br><hr><br>


  E-mail: <input value="<?php echo $email ?>" type="text" name="email" id="email" size="25" onkeyup="checkEmail()" onblur="checkEmail()">
  <span class="error" id="emailErr"><?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];}?></span>
  <br><hr><br>


  Date Of Birth:
  <input value="<?php echo $dob ?>" type="date" name="dateofbirth" id="birthday" onkeyup="checkDOB()" onblur="checkDOB()">
  <span class="error" id="birthdayErr"><?php if(!empty($_GET['dobErr'])){echo $_GET['dobErr'];}?></span>
  <br><hr><br>


  Address:
  <input value="<?php echo $address ?>" type="text" name="address" id="address"  size="35" onkeyup="checkAddress()" onblur="checkAddress()">
  <span class="error" id="addressErr"><?php if(!empty($_GET['addressErr'])){echo $_GET['addressErr'];}?></span>
  <br><br><hr>

  <input type="submit" name="submit" value="Submit"> <input type="reset" value="Reset"></div></div></form>

<div><?php include 'Sources/footer.php';?></div>
</body>
</html>
