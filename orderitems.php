<?php 

	try {
	$db = new PDO("mysql:host=localhost;dbname=pos;charset=utf8", "root", "");

	$statement = $db->prepare('select * from orderitems');
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
 	<title>OrderItems</title>
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
 			<td>itemid</td>
 			<td>itemqty</td>
 		</tr>
 		<?php  foreach($results as $row) { ?>
 		<tr>
 			<td><?= $row["OrderID"]?></td>
 			<td><?= $row["itemid"]?></td>
 			<td><?= $row["itemqty"]?></td>
 		</tr>
 		<?php } ?>
 	</table>
 </body>
 </html>




