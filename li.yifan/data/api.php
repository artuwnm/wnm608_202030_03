

<?php

include_once "../lib/php/functions.php";

$output = [];

$data = json_encode(file_get_contents("php://input"));

print_p($data);

$output['result'] = getRows(makeConn(),"SELECT * FROM `products`");

echo (json_encode(
	$output,
	JSON_UNESCAPED_UNICODE|
	JSON_NUMERIC_CHECK
));