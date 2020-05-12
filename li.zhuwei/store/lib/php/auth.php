<?php
function makeAuth() {
	return [
		"localhost", // Database host location
		"aauwnm", // Database user name
		"aauwnm", // Database user password
		"aauwnm" // Datebase database name 

	];
}

function makePDOAuth() {
	return[
		"mysql:host=localhost;dbname=aauwnm", // host and database name
		"aauwnm", //database USER name
		"aauwnm", // database USER password
		[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
	];
}

?>