<?php 

class Vehicle {

    public $doors;
    public $color;
    public $tires;
    
    
    public function __construct($doors,$color,$tires) {
    
             $this->tires = $tires;
             $this->color = $color;
             $this->doors = $doors;
             
    }
    
    public function getData() {
             
             return "this car has " . $this->tires . " tires, the cars color is " . $this->color . " and the car has " . $this->doors . " doors on it as well.";
    }
    
}   

$mycar = "";


$mycar = new Vehicle(2,"white",4);
$mycar->getData(); 


class Car extends Vehicle {

        public $make;
        public $model;
        
        public function __construct($doors,$color,$tires,$make,$model) {
            parent::__construct($doors,$color,$tires);
            $this->make = $make;
            $this->model = $model;

            // $this->tires = $tires;
            // $this->color = $color;
            // $this->doors = $doors;
          
        }
}
            
$mycar = new Car(2,"white",4,"Ford","Mustang");
// $mycar->getData();
print_r($mycar);


function foo() {
    $x = 27;
    $y = 32;
    $ans = $x + $y;
}

echo gettype(foo());