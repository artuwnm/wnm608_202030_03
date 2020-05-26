<?php

function makeAuth () {
	return[
	"localhost", //Database host location
	"wilsonbarrios_wilsonbarrios", //Database username
	"Wb@rr10s8133", //Database password
	"wilsonbarrios_aawm", //Database name


	];
}

function makePDOAuth() {
	return[
	"mysql:host=localhost;dbname=wilsonbarrios_aawm", // host and database name
		"wilsonbarrios_wilsonbarrios", // database USER name
		"Wb@rr10s8133",	// database USER password
		[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]

	];
}