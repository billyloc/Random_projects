<?php  

$states = ["New Mexico" => "NM", "Arizona" => "AZ","California" => "CA", "Florida" => "FL"];

$options = "";
foreach($states as $key => $state) {
	 	$options .= "<option value=\"" . $key . "\">" . $state . "</option>";
	} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Forms</title>
</head>
<body>
	<form action="login.php" method="GET">
		Username<input type="text" name="username" required><br>
		Password<input type="password" value="" name="password" required><br>	
		Gender : 
		<input type="radio" value="male" name="gender"> Male 
		<input type="radio" value="female" name="gender"> Female <br>
		<select name="states" id="states">
		<!-- 	<option value="nm" name="state">New Mexico</option>
			<option value="az" name="state">Arizona</option>
			<option value="ca" name="state">California</option> -->
 			<?= $options ?>
		</select><br>
		<button>OK</button>
	</form>


</body>
</html>