<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="controller/createProduct.php" method="POST" enctype="multipart/form-data">
 <fieldset>
 <legend>ADD PRODUCT</legend>
 
  <li for="name">Name:</li>
  <input type="text" id="name" name="name"><br>
  <li for="buyingPrice">Buying Price:</li>
  <input type="text" id="buyingPrice" name="buyingPrice"><br>
  <li for="sellingPrice">Selling Price:</li>
  <input type="text" id="sellingPrice" name="sellingPrice"><br>
  
  <input type="checkbox" name="display"  value="Yes" >Display <br>
 
  <input type="submit" name = "createProduct" value="Save">
 </fieldset>
</form> 

</body>
</html>

