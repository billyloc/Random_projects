<?php  
$states3 = ["New York" => "NY", "Texas" => "TX", "Mexico" => "MX", "California" => "CA"];

$st = "";


foreach($states3 as $key => $value){
	$st .= "<option value=\"" . $key ."\">" . $value . "</option>" ;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="login2.php" method="GET">
		USERNAME <input type="text" name="username" required> <br>
		PASSWORD <input type="password" name="password" required> <br>
		GENDER 
		<input type="radio" value="male" name="gender" selected> Male
		<input type="radio" value="female" name="gender"> Female <br>	
		<select name="states" id="">
			<option value=""></option>
			<?php echo $st ?>
		</select>
		<input type="submit"> 


	</form>

	
</body>
</html>