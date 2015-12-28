<?php 

$options = "";
$quantity = "";
$prod = "";


$products = ["pd_1" => "Windows","pd_2" => "Ubuntu","pd_3" => "Mac"];

if(isset($_GET["product_id"])){
$prod = $_GET["product_id"];
}
if(isset($_GET["quantity"])){
	$quantity = $_GET["quantity"];
}

foreach($products as $key =>$value) {
	 	$options .= "<option value=\"" . $key . "\">" . $value . "</option>";
	} 


	if($prod == "pd_3") {
		if($quantity > 7) {
			echo " you cannot order more than 7 Macs";
		}
	}

	if(isset($prod)) {
		if($quantity >= 1) {
			echo "you ordered " . $quantity . " " . $value . "s";
		}
	}

		if($prod == "pd_3") {
		if($quantity > 7) {
			echo " you cannot order more than 7 Macs";
		}
	}

	if($quantity < 1) {
		echo "Invalid quantity";
	}

 ?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div>
		<h1>Browse Products</h1>
	</div>
	<form action="browse2.php" method="GET">
			Products
			<select name="product_id">
		
			<?= $options ?>
			
			</select>
	 
			Quantity
			<input name="quantity" type="number" min="1">
			

			Submit
			<button type="submit">Submit</button>
		</form>
	
</body>
</html>