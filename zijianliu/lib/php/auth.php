<?php

function makeAuth() {
	return [
		"localhost",	// Database host location
		"aauwnm60803",	// Database user name
		"aauwnm60803",	// Database user password
		"aau.wnm608.03"	// Database database name
	];
}

function makePDOAuth() {
	return [
		"mysql:host=;dbname=", // host and database name
		"aauwnm60803", // database USER name
		"aauwnm60803",	// database USER password
		[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
	];
}