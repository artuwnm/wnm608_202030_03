<?php 

function getData() {
	$string = file_get_contents("../data/users.json");
	return json_decode($string, true);
}

include_once "auth.php";
function makeConn() {
	@$conn = new mysqli(...makeAuth());
	if($conn->connect_errno) die("Connection failed: " . $conn->connect_error);
	$conn->set_charset("utf8");
	return $conn;
}


function getRows($conn, $sql) {
	$a = [];
	$result = $conn->query($sql);
	if($conn->errno) die($conn->error);
	while($row = $result->fetch_object()) {
		$a[] = $row;
	}
	return $a;
}

?>