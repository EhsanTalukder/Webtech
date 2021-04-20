<!DOCTYPE html>
<html>
<head>
	<title>VIEW PROFILE</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style-1.css">
	<style type="text/css">
	</style>
</head>
<body>
	<?php

session_start();

 if(!isset($_SESSION['cpasswordE']))
 {
   $_SESSION['cpasswordE']="";
 }

 if(!isset($_SESSION['npasswordE']))
 {
   $_SESSION['npasswordE']="";
 }
  if(!isset($_SESSION['rnpasswordE']))
 {
   $_SESSION['rnpasswordE']="";
 }

 $cpassword=$npassword=$rnpassword="";
 
 ?>
	<br>
	<div>
  		<div class="row">
  			<div class="col-4">
  			</div>

    		<div class="col-8">
    			<div id="bb"><br>
				 <form  method="post" action="controller/changepassword.php">
				      <lebel>Current Password:</lebel> 
					  <input type="text" name="cpassword">        
			          <br>
			          <lebel style="color:green">New Password:</lebel>
			          <input type="text" name="npassword" >         
			          <br>
			          <lebel style="color:Red">Retype New Password:</lebel>
			          <input type="text" name="rnpassword" >        
			          <br>
					   <br> <span class="error" > <?php echo $_SESSION['cpasswordE'];?></span><br>
					     <br> <span class="error" > <?php echo $_SESSION['npasswordE'];?></span><br>	
						   <br> <span class="error" > <?php echo $_SESSION['rnpasswordE'];?></span><br>
					  <hr>
			          <input type="submit" name="submit" value="Submit">
			         </form> <br>
      			</div>
   			</div>
  		</div><br>
	</div>


	<?php
	include('footer.php');
	?>

</body>
</html>