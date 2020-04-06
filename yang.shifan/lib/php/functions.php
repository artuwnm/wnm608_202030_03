<?php 

function getData() {
	$string = file_get_contents("../data/users.json");
	return json_decode($string, true);
}

?>
