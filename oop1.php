<?php 

$person = ["name" => "Daniel", "age" => 40];


class Person {
	private $first_name;
	public $last_name;
	private $age;

	function __construct($fname, $lname, $age=null) {
		$this->first_name = $fname;
		$this->last_name = $lname;
		$this->age = $age;
	}

	// function setFirstName($name) {
	// 	$this->first_name = $name;
	// }
		function getFirstName(){
	 	return $this->first_name;
	 }

	// function setAge($age) {
	// 	if(is_numeric($age)){
	// 		$this->age = $age;
	// 	}
	}


$bob = new Person("bob", "ross");
print_r($bob);


$person1 = new Person("fred","smith",99);
print_r($person1);

//outputs person full name


echo $person1->getFirstName();

echo "<br>";


class Animals{
	public $legs;
	public $color;


	public function __construct($l,$c) {
		$this->legs = $l;
		$this->color = $c;
	}
}	
	$l = "";
		

	if($l <= 8){
		return "true";
	} else {
		return "your animal is invalid";
	}


echo "<br>";



$spider = new Animals(4,4);
print_r($spider);

echo "<br>";


$str = "you are a fucking asshole, I also know a lot of other assholes";

$cursewords = array("fucking", "asshole", "idiot");
$replacers = array("**", "buttholes", "id**t");
$cleanstr = str_ireplace($cursewords,$replacers, $str);
echo $cleanstr;







 ?>