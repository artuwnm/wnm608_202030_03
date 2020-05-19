<?php

include_once "form_actions.php";;

$output = [];

$data = json_decode(file_get_contents("php://input"));
// print_r($data);






if(!isset($data->type)) {
	$output['error'] = "No Type";
} else switch($data->type) {
	case "item_search":
		$output['result'] =
			getRows($conn,"SELECT * FROM `products` WHERE id={$data->id}");
		break;
	case "product_all":
		$output['result'] =
			getRows($conn,"SELECT
			*
			FROM `products`
			ORDER BY `id` DESC
			LIMIT 12
			");
		break;
	case "product_from_id":
		$output['result'] =
			getRows($conn,"SELECT * FROM `products` WHERE id={$data->id}");
		break;

	case "product_search":
		$output['result'] =
			getRows($conn,"SELECT
				*
				FROM `products`
				WHERE
					`title` LIKE '%{$data->search}%' OR
					`description` LIKE '%{$data->search}%' OR
					`category` LIKE '%{$data->search}%'
				ORDER BY `id` DESC
				LIMIT 12
				");

		break;

	case "product_filter":
		$output['result'] =
			getRows($conn,"SELECT
				*
				FROM `products`
				WHERE `$data->column` = '$data->value'
				ORDER BY `id` DESC
				LIMIT 12
				");
		break;

	case "product_sort":
		$output['result'] =
			getRows($conn,"SELECT
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
?>