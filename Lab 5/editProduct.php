<?php 

require_once 'controller/display.php';
$product = fetchProduct( $_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add </title>
</head>
<body>

<form action="controller/editProduct.php?id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data">
  <fieldset>
<legend><B>Edit Product</B></legend> <br>
  <li>Name:</li>
  <input type="text" name="name" value="<?php echo $product['Name']; ?> " > <br>
  <li>Buying Price:</li>
  <input type="text" name="buyingPrice" value="<?php echo $product['BuyingPrice']; ?> " > <br>
  <li>Selling Price:</li>
  <input type="text" name="sellingPrice" value="<?php echo $product['SellingPrice']; ?> " > <br>
  
  <input type="checkbox" name="display" value="Yes" <?php if($product['Display']=='Yes'){echo 'checked';} ?>>Display<br>
  <input type="submit" name="submit" value="Save">
</form>
</fieldset>
</body>
</html>
<?php 
