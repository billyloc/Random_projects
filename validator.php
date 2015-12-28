<?php 


// echo ("welcome to VALIDATOR");


class Validator {

	protected $pattern = "";


	public function isValid($string){
		if(preg_match($this->pattern,$string){
			return true;
		}
		else {
			return false;
		}
	}
}


class UsernameValidator extends Validator {
	protected $pattern = "/^[a-zA-Z]{5,}$/";
}

class PasswordValidator extends Validator {
	protected $pattern = "/^[a-zA-Z0-9!@#$%^&*\(\)]{5,}$/";
}

$usernameValidator = new UsernameValidator;
$usernameValidator->isValid($_SESSION["username"]);

$passwordValidator = new PasswordValidator;
$passwordValidator->isValid($_SESSION["password"]);




// $myValidator = new catValidator();

// if($myValidator->isValid("dog")) {
// 	echo "you are valid";
// } else {
// 	echo "You are NOT valid!!!!!!";
// }

 ?>