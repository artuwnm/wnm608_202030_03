<?php


function getData($f) {
	return json_decode(file_get_contents($f));
}

function putData($f, $data) {
	file_put_contents($f, json_encode($data));
}

function print_p($v) {
	echo "<pre>",print_r($v),"</pre>";
}