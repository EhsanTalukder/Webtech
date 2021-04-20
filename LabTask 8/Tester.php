<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
</head>
<body>

<header>
<?php include 'controller/Head1.php';?>
</header>
    <th><?php if (isset($_SESSION['username'])) {
    echo "<div style= 'margin-right: 850px;font-size: 30px;'> Welcome ".$_SESSION['username']."</div>";

}

?>
<table>
  <tr>
    <th>
        Account<hr><br>
        <div>
        <li><a href="view Profile.php">View Profile</a></li><br><br>
        <li><a href="edit profile.php">Edit Profile</a></li><br><br>
        <li><a href="Report.php">Patient List</a></li><br><br>
        <li><a href="setreport.php">Set Report</a></li><br><br>
    </div>
    </th>


</th>
  </tr> 
</table>

<div><?php include 'Sources/footer.php';?></div><hr>

</body>
</html>

