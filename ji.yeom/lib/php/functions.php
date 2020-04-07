<?php


function getData($f) {
	return json_decode(file_get_contents($f));
}

function print_p($v) {
	echo "<pre>",print_r($v),"</pre>";
}

?>