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

	case "products_search":
		$output['result'] = makeQuery(makeConn(),"SELECT *
	        FROM `products`
	        WHERE `name` LIKE '%$data->search%' OR
	        WHERE `category` LIKE '%$data->search%' OR
	        WHERE `description` LIKE '%$data->search%' OR
	        ORDER BY `custom_id` ASC
	        LIMIT 15");
		break;

	default: $output['error'] = "No Valid Type";
}

echo json_encode($output,JSON_NUMERIC_CHECK|JSON_UNESCAPED_UNICODE);