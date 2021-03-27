<?php  
require_once 'controller/display.php';

$products = fetchAllProducts();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	th, td {
  	padding:9px;}
</style>
</head>
<body>
<fieldset>
				<legend>Display</legend>
<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Profit</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($products as $i => $product): ?>	
				<?php if($product['Display']=='Yes'){ ?>
				
			<tr>
				<td><?php echo $product['Name'] ?></td>
				<td><?php echo $product['Profit'] ?></td>
				<td><a href="editProduct.php?id=<?php echo $product['ID'] ?>">Edit</a>&nbsp <a href="delete.php?id=<?php echo $product['ID'] ?>">Delete</a></td>				
			</tr>
       		
		<?php } ?>	
		<?php endforeach; ?>
		

	</tbody>
	
</table>
</fieldset>	
</body>
</html>