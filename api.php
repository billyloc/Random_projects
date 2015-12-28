<?php
session_start();

    
if(isset($_SESSION["dogs"])){
	$dogs = $_SESSION["dogs"];
}

if(isset($_POST["pup_name"])) {
	$name = $_POST["pup_name"];
}

    for($i=0; $i<count($dogs);$i++){
        if($dogs[$i] == $name){
            array_splice($dogs, $i, 1);
        } 
    }
    
}