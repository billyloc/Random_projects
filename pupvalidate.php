<?php 

session_start();


class Validate {




	public function isValid() {
		if($_SESSION["name"] > 2) {
			if($_SESSION["name"] < 60) {
				echo "yes";
			} else {
				echo "bad puppy name";
			}
		} else {
			echo "bad puppy name";
		}
}
}