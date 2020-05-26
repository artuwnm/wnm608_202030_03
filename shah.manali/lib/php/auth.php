<?php

function makeAuth() {
	return [
		"localhost",	// Database host location
		"aau608",	// Database user name
		"aau608",	// Database user password
		"aau608"	// Database database name
	];
}

function makePDOAuth() {
	return [
		"mysql:host=localhost;dbname=aau608", // host and database name
		"aau608", // database USER name
		"aau608",	// database USER password
		[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
	];
}