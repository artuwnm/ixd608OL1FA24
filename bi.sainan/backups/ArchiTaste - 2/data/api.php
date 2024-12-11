<?php

include_once "../lib/php/functions.php";

$output = [];

$data = json_decode(file_get_contents("php://input"));

//print_p($data);

switch($data->type) {
	case "products_all":
		$output['result'] = makeQuery(makeConn(),"SELECT *
	        FROM `products`
	        ORDER BY `custom_id` ASC
	        LIMIT 15");
		break;

	case "product_search":
		$output['result'] = makeQuery(makeConn(),"SELECT *
	        FROM `products`
	        WHERE `name` LIKE '%$data->search%' OR
	        `designer` LIKE '%$data->search%' OR
	        `category` LIKE '%$data->search%' OR
	        `description` LIKE '%$data->search%'
	        ORDER BY `custom_id` ASC
	        LIMIT 15");
		break;

	case "product_filter":
		$output['result'] = makeQuery(makeConn(),"SELECT *
	        FROM `products`
	        WHERE `$data->column` LIKE '$data->value'
	        ORDER BY `custom_id` ASC
	        LIMIT 15");
		break;

	case "product_sort":
		$output['result'] = makeQuery(makeConn(),"SELECT *
	        FROM `products`
	        ORDER BY `$data->column` $data->dir
	        LIMIT 15");
		break;

	default: $output['error'] = "no valid type";
}

echo json_encode($output,JSON_NUMERIC_CHECK|JSON_UNESCAPED_UNICODE);