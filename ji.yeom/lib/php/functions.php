<?php


function getData($f) {
	return json_decode(file_get_contents($f));
}


function print_p($v) {
	echo "<pre>",print_r($v),"</pre>";
}


include_once "auth.php";
function makeConn() {

	@$conn = new mysqli(...makeAuth()); ; //@ use for testing if you are not sure the code works or not

	if($conn->connect_errno) die($conn->connect_error);

	$conn->set_charset('utf8');

	return $conn;
}


function getRows($conn,$sql) {
	$a = [];

	$result = $conn->query($sql);

	if($conn->errno) die($conn->error);

	while($row = $result->fetch_object()) {
		$a[] = $row;
	}

	return $a;
}