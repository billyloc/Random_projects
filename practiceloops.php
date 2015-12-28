<?php 

$cars = ['Chevy', 'Ford', 'Nissan', 'Dodge', 'Mercedes', 'Honda', 'Kia'];

// echo $cars[2];

// echo $cars[5];

// echo count($cars);

// foreach($cars as $key => $value){
// 	echo $value . "<br>";
// }

// echo count($cars);


for ($i=0; $i < count($cars); $i++) { 
 echo "$cars[$i]<br>";
}

$pets = ['dog', 'cat', 'snake', 'bird', 'turtle', 'rat', 'rabbit'];

echo $pets[0];

echo $pets[3];

foreach($pets as $pet){
	echo "$pet <br>";
}

echo "<br>";


for ($i=0; $i < 4; $i++) { 
	echo "$pets[$i] <br>";
}

echo "<br>";

for ($i=0; $i < count($pets); $i+=2) { 
	echo $pets[$i];
}

echo "<br>";

$numbers = [8, 24, 3, 18, 54, 89];
$add = 0;

for ($i=0; $i < count($numbers); $i++) { 

}


echo $array[3];


 for($i = 0; $i < 100; $i++){
     if($i % 2){
         echo $i;
 }
}

$poem2 = "hello how are you doing this is a poem and now time to mess with it";

echo explode(" ",$poem2);

print_r (explode(" ",$poem2));


print_r (implode("!",$pets));





 ?>