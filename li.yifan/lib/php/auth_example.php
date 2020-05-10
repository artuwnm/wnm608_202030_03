<?php

function makeAuth() {
	return [
		"",	// Database host location
		"",	// Database user name
		"",	// Database user password
		""	// Database database name
	];
}

function makePDOAuth() {
	return [
		"mysql:host=;dbname=", // host and database name
		"", // database USER name
		"",	// database USER password
		[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
	];
}