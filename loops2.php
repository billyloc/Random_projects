<?php 

$products = ["hammer", "screwdriver", "wrench", "shovel", "rake"];

foreach($products as $product)
	

// skip the products that start with the letter h

if($product == "screwdriver") {
	continue;
	echo("Won't print");
} else {
	echo($product);
}

echo "this will show";








 ?>