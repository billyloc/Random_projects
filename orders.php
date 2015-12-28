<?php 

	try {
	$db = new PDO("mysql:host=localhost;dbname=pos;charset=utf8", "root", "");

	$statement = $db->prepare('select * from orders');
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
 		background-color: pink;
 	}
	td {
		border-bottom: 1px solid black;
	}
 	</style>
 </head>
 <body>
 	<h1>Orders</h1>

 	<table>
 		<tr>
 			<td>OrderID</td>
 			<td>orderdate</td>
 			<td>customerID</td>
 		</tr>
 		<?php  foreach($results as $row) { ?>
 		<tr>
 			<td><?= $row["OrderID"]?></td>
 			<td><?= $row["orderdate"]?></td>
 			<td><?= $row["customerID"]?></td>
 		</tr>
 		<?php } ?>
 	</table>
 </body>
 </html>




