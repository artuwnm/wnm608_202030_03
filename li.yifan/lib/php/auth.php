<?php

function makeAuth() {
	return [
		"localhost",	// Database host location
		"hamil19_class",	// Database user name
		"password",	// Database user password
		"hamil19_class"	// Database database name
	];
}

function makePDOAuth() {
	return [
		"mysql:host=localhost;dbname=hamil19_class", // host and database name
		"hamil19_class", // database USER name
		"password",	// database USER password
		[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
	];
}