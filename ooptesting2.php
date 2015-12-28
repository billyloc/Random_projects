<?php 

// // class Animal {

// // 	public $foodType;
// // 	public function __construct($type) {
// // 		$this->foodType = $type;
// // 	}

// // }

// // class Carnivore extends Animal {
// // 	public function __construct() {
// // 		$this->foodType = "carnivore";
// // 	}
// // }

// // class Herbivore extends Animal {
// // 	public function __construct() {
// // 		$this->foodType = "herbivore";
// // 	}
// // }

// // class Omnivore extends Animal {
// // 	public function __construct() {
// // 		parent::__construct("omnivore");
// // 	}
// // }


// // $badger = new Carnivore();

// // class ZooKeeper {
// // 	private $meat = 10;
// // 	private $veg = 10;

// // 	public function feed($animal) {
// // 		if($animal->foodType == "carnivore") {
// // 			$this->meat -= 2;
// // 		} elseif($animal->foodType == "herbivore") {
// // 			$this->veg -= 2;
// // 		} elseif($animal->foodType == "omnivore") {
// // 			$this->meat --;
// // 			$this->veg --;
// // 		} else {
// // 			die("invalid foodType: " . $animal->foodType);
// // 		}
// // 	}

// // 	public function getFoodStatus() {
// // 		return "Zookeeper food status: " . "meat: " . $this->meat . " veg: " . $this->veg;

// // 	}
// // }


// // $trex = new Animal("carnivore");
// // $elephant = new Animal("herbivore");
// // $bear = new Animal("omnivore");
// // $lorax = new Animal("candivore");

// // $Zooguy = new ZooKeeper();
// // echo $Zooguy->getFoodStatus(), "<br>";

// // $Zooguy->feed($bear);
// // echo $Zooguy->getFoodStatus(), "<br>";

// // $Zooguy->feed($trex);
// // echo $Zooguy->getFoodStatus(), "<br>";





// // class Animals {
// // 	public $legs;
// // 	public $color;


// // 	public function __construct($l,$c) {
// // 		$this->legs = $l;
// // 		$this->color = $c;
	

// // 	if($l <= 8){
// // 		return "true";
// // 	} else {
// // 		return "your animal is invalid";
// // 	}
// // 	}


// // }
// // echo "<br>";



// // $spider = new Animals(4,"black");
// // print_r($spider);


// class Person {

// 	public $health = 100;
// 	public $name;
// 	public $sword = 5;
// 	public $gun = 25;

// 	public function __construct($first_name) {
// 		$this->name = $first_name;

// 	}
// 	public function attack($person) {
// 		return $person->health -=10;
// 	}

// 	public function getHealth() {
// 		return $this->name . " " . $this->health . "<br>";
// 	}

// 	public function speak() {
// 		return "Hi my name is " . $this->name;
// 	}

// 	public function eat() {
// 		return $this->health = 100;
// 	}
// }

// class Weapon extends Person {
// 	public $damageAmount;


// 	public function __construct($weapon,$damage) {
// 		$this->weapon = $weapon;
// 		$this->damage = $damage;
// 	}

// 	public function use($weapon) {
// 		if($weapon == "sword"){
// 			return $person->health -=5;
// 		}
// 		if($weapon == "gun"){
// 			return $person->health -=25;
// 		} 
// 	}
// }


// $sword = new Weapon("sword",5);
// $gun = new Weapon("gun",25);




// $billy = new person("Billy");

// echo $billy->speak();
// echo "<br>";

// $sasha = new person("Sasha");

// echo $sasha->speak();
// echo "<br>";


// $billy->attack($sasha);
// echo $sasha->getHealth();
// $sasha->attack($billy);
// echo $billy->getHealth();
// $sasha->attack($billy);
// $sasha->attack($billy);
// $sasha->attack($billy);
// $sasha->attack($billy);
// echo $billy->getHealth();
// $billy->eat();
// echo $billy->getHealth();
// $billy->use("gun");

?>

<?php  


class Cow {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

}

class Farmer {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function milkCow($cow) {
        echo "Farmer $this->name milked $cow->name the cow<br>";
    }
}

$cowNames = ['Sara', 'Betsy', 'Paula', 'Sue'];

$cows = [];
for ($i = 0; $i < 5000; $i++) {
    $name = $cowNames[rand(0, count($cowNames) - 1)];
    $cows[] = new Cow($name);
}

// Several Farmers
$john = new John('John');
$bob = new John('Bob');
$joAnne = new John('Jo Anne');

// Milk the first five cows
for ($i = 0; $i < 5; $i++) {
    $john->milkCow($cows[$i]);
}










 ?>