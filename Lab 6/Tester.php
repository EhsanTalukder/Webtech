<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
<header>
<?php 
session_start();

if (empty($_SESSION['username'])) {
    echo "<a href='Login.php' style= 'float: right;' margin-right: '20px;'>Go to login!</a></div><br><br><br><hr>";
    
}

else{
    echo "<div>"." Logged in as <a href='Profile.php'>".$_SESSION['username']."</a> | ";
    echo "</div><br><br><hr><br>";
}
 ?>
</header><br>
<table>
    <th>
    	Account<hr><br>
    	<div>
    	<li> <a href="Tester.php">Dashboard</a></li><br><br>
    	<li><a href="view Profile.php">View Profile</a></li><br><br>
    	<li><a href="Report.php">Patient List</a></li><br><br>
    	<li><a href="setreport.php">Set Report</a></li><br><br>
    	<li><a href="Sources/Logout.php">Logout</a></li><br><br>
    </th>
</th>
  </tr> 
</table>

<div><?php include 'Sources/footer.php';?></div><hr>
</body>
</html>