<?php

session_start();


function print_p($v) {
	echo "<pre>",print_r($v),"</pre>";
}


function getFileData($url) {
	$file = file_get_contents($url);
	$data = json_decode($file);
	return $data;
}


include_once "auth.php";
function makeConn() {
	if(!function_exists('makeAuth')) die("No makeAuth, check in auth.php");
}


	@$conn = new mysqli(...makeAuth());




if($conn->connect_errno) die($conn->connect_error);

$conn->set_charset("utf8");

return $conn;



function getData($sql) {
	$conn = makeConn();

	$result = $conn->query($sql);

	if($conn->errno) die($conn->error);

	$arr = [];
	while($row = $result->fetch_object()) $arr[]=$row;

	$conn->close();

	return $arr;
}





// function getData($f) {
// 	return json_decode(file_get_contents($f));
// }


// function print_p($v) {
// 	echo "<pre>",print_r($v),"</pre>";
// }


// include_once "auth.php";
// function makeConn() {

// 	@$conn = new mysqli(...makeAuth());

// 	if($conn->connect_errno) die($conn->connect_error);

// 	$conn->set_charset('utf8');

// 	return $conn;
// }


// function getRows($conn,$sql) {
// 	$a = [];

// 	$result = $conn->query($sql);

// 	if($conn->errno) die($conn->error);

// 	while($row = $result->fetch_object()) {
// 		$a[] = $row;
// 	}

// 	return $a;
