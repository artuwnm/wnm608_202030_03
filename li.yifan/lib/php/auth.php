<?php

function makeAuth() {
	return [
		"localhost",	// Database host location
		"aauwnm608vierl",	// Database user name
		"19910305",	// Database user password
		"aauwnm608vierl"	// Database database name
	];
}

function makePDOAuth() {
	return [
		"mysql:host=localhost;dbname=aauwnm608vierl", // host and database name
		"aauwnm608vierl", // database USER name
		"19910305",	// database USER password
		[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
	];
}