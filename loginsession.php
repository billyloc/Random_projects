<?php 

session_start();


if(isset($_SESSION["username"]) && strlen($_SESSION["username"]) > 0) {
	header("Location: profile.php");
	exit();
} else {
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if(isset($_POST["username"]) && isset($_POST["password"])) {
			if(strlen($_POST["password"]) == 7) {
				$_SESSION["username"] = $_POST["username"];
				header("Location: profile.php");
				exit();
			} 
		}
	}
}


 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<form action="" method="POST">
 		USERNAME: <input type="text" name="username"><br>
 		PASSWORD: <input type="text" name="password"><br>
 		<button>Login</button>
 	</form>
 </body>
 </html>