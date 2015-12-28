<?php 

require_once("simple_html_dom.php");

$html = file_get_html('http://www.rei.com/search.html?q=knives&page=1');

print_r($html);




 ?>