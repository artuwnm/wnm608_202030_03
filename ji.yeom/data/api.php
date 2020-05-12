<?php

include_once "../lib/php/functions.php";

$output = [];

$data = json_decode(file_get_contents("php://input"));

if(!isset($data->type)) {
	$output['error'] = "No Type";
} else switch($data->type) {
	case "product_all":
		$output['result'] =
			getRows(makeConn(),"SELECT
			*
			FROM `products`
			ORDER BY `date_create` DESC
			LIMIT 12
			");
		break;

	case "product_from_id":
		$output['result'] =
			getRows(makeConn(),"SELECT * FROM `products` WHERE id={$data->id}");
		break;

	case "product_search":
		$output['result'] =
			getRows(makeConn(),"SELECT
				*
				FROM `products`
				WHERE 
					`name` LIKE '%{$data->search}%' OR
					-- `description` LIKE '%{$data->search}%' OR
					`category` LIKE '%{$data->search}%' 
				ORDER BY `date_create` DESC
				LIMIT 12
				");
		break;

	case "product_filter":
		$output['result'] =
			getRows(makeConn(),"SELECT
				*
				FROM `products`
				WHERE `$data->column` = '$data->value'
				ORDER BY `date_create` DESC
				LIMIT 12
				");
		break;

	case "product_sort":
		$output['result'] =
			getRows(makeConn(),"SELECT
				*
				FROM `products`
				ORDER BY `$data->column` $data->dir
				LIMIT 12
				");
		break;

	default:
		$output['error'] = "Didn't Match Type";
}


echo (json_encode(
	$output,
	JSON_UNESCAPED_UNICODE|
	JSON_NUMERIC_CHECK
));