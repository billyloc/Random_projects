<?php 

class Duck{
	private $name;
	protected $sound;

	public function __construct($name){
		echo "I am alive";
		$this->name=$name;
		$this->sound= "UNKNOWN";
	}

	public function speak(){
		echo "I can speak " . $this->sound;
	}

}

class rubberDuck extends Duck{
	public function __construct(){
		$this->sound = "Squeek Squeek";
	}




}

$darkwing = new Duck("Drake Mallard"); 
$darkwing->speak();
$bill = new rubberDuck("bad Brig");
$bill->speak();



