<?php if(!empty($_GET['id'])){ ?>

<?php 

require_once 'controller/display.php';
$product = fetchProduct($_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete Product</title>
</head>
<body>
	<fieldset>
<legend>Delete Product</legend> <br>
<form action="controller/deleteProduct.php?id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data">
 <li>Name:</li>
 <?php echo $product['Name']; ?> <hr>
 <li>Buying Price:</li>
 <?php echo $product['BuyingPrice']; ?> <hr>
 <li>Selling Price:</li>
 <?php echo $product['SellingPrice']; ?> <hr>
 <li>Displayable:</lai>
 
<?php echo $product['Display']; ?><hr>
  <input type="submit" name="submit" value="delete">
</form>
</fieldset>
</body>
</html>
<?php }
else{
	echo "You are not allowed to proceed";
} ?>