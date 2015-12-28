<?php 

	try {
	$db = new PDO("mysql:host=localhost;dbname=pos;charset=utf8", "root", "");

	$statement = $db->prepare('select * from customers');
	$statement->execute();

} catch (PDOException $e) {
    die($e->getMessage());
}

	$results = $statement->fetchAll();


	 ?>


	 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Items</title>
 	<style>
 	body {
 		background-color: blue;
 	}
 	table {
 		background-color: yellow;
 	}
	td {
		border-bottom: 1px solid black;
	}
 	</style>
 </head>
 <body>
 	<h1>Customers</h1>

 	<table>
 		<tr>
 			<td>customerid</td>
 			<td>email</td>
 			<td>shippingaddress</td>
 			<td>billingaddress</td>
 			<td>firstname</td>
 			<td>lastname</td>
 		</tr>
 		<?php  foreach($results as $row) { ?>
 		<tr>
 			<td><?= $row["customerID"]?></td>
 			<td><?= $row["Email"]?></td>
 			<td><?= $row["ShippingAddress"]?></td>
 			<td><?= $row["BillingAddress"]?></td>
 			<td><?= $row["FirstName"]?></td>
 			<td><?= $row["LastName"]?></td>
 		</tr>
 		<?php } ?>
 	</table>
 </body>
 </html>




