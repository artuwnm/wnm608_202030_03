<?php

function makeAuth() {
	return [
		"localhost",	// Database host location
		"aauwnm608zoe",	// Database user name
		"Zzj35j88@",	// Database user password
		"aauwnm608zoe"	// Database database name
	];
}

function makePDOAuth() {
	return [
		"mysql:host=;dbname=", // host and database name
		"aauwnm608zoe", // database USER name
		"Zzj35j88@",	// database USER password
		[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
	];
}