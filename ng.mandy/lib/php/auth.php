<?php

function makeAuth() {
	return [
		"localhost:3306",	// Database host location
		"aau_wnm",	// Database user name
		"Mandy@01",	// Database user password
		"aau_wnm"	// Database database name
	];
}
function makePDOAuth() {
	return [
		"mysql:host=localhost;port=3306;dbname=aau_wnm", // host and database name
		"aau_wnm", // database USER name
		"Mandy@01",	// database USER password
		[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
	];
}