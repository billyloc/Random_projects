<?php 

session_start();

$list = "";
$msg = "";
$name = "";
$dogs = [];

class Validator {

	public $pattern = "/^([A-Za-z]){3,60}$/";


	public function isValid($string){
		if(preg_match($this->pattern,$string)){
			return true;
		}
		else {
			return false;
		}
	}
}

$puppyValidator = new Validator;


if(isset($_SESSION["dogs"])){
	$dogs = $_SESSION["dogs"];
}


if(isset($_POST["pup_name"])) {
	$name = $_POST["pup_name"];
}



if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if($puppyValidator->isValid($name)) {
			array_push($dogs, $name);
			$_SESSION["dogs"] = $dogs;
		}  else {
		$msg =  "bad puppy name";
	}
}



foreach ($dogs as $value) {
	$list .=  "<li>" . $value . "<button class='remove'>X</button>" . "</li>";
}


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<script>
		$(document).ready(function(){
        	$('.remove').click(function(){
           		$(this).closest('li').hide();

           		var puppyname = $("span", li).text();
           		li.remove();


           		$.get("api.php", function(data){
           			console.dir(data);
           		});
        	});
    	});

	</script>
</head>
<body>

<form action="puppypound.php" method="POST">
	Puppy Name<input type="text" name="pup_name">
	<button>ADD</button>
	<?= $msg  ?>
	
</form>

	<ol>
		<?= $list  ?>
		<button class="reset">RESET</button>
	</ol>
	
</body>
</html>