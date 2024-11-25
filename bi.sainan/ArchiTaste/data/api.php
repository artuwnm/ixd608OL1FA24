<?php

include_once "../lib/php/functions.php";

$output = [];

$data = json_decode(file_get_contents("php://input"));

//print_p($data);

switch($data->type) {
	case "products_all":
		$output['result'] = makeQuery(makeConn(),"SELECT *
	        FROM `products`
	        ORDER BY `date_create` DESC
	        LIMIT 15");
		break;

	case "products_search":
		$output['result'] = makeQuery(makeConn(),"SELECT *
	        FROM `products`
	        WHERE `name` LIKE '%$data->search%'
	        ORDER BY `date_create` DESC
	        LIMIT 15");
		break;

	default: $output['error'] = "no valid type";
}

echo json_encode($output,JSON_NUMERIC_CHECK|JSON_UNESCAPED_UNICODE);