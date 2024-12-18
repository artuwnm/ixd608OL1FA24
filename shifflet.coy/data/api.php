<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once "../lib/php/functions.php";

$output = [];

$data = json_decode(file_get_contents("php://input"));

if (!isset($data->type)) {
    $output['error'] = "No Type Provided";
} else {
    error_log("Received type: " . $data->type); // Log the received type

    switch ($data->type) {
        case "products_all":
            $output['result'] = makeQuery(makeConn(), "SELECT 
                *
                FROM `products`
                ORDER BY `date_create` DESC
                LIMIT 12
            ");
            break;


        case "product_from_id":
            $output['result'] = makeQuery(makeConn(), "SELECT 
                *
                FROM `products`
                WHERE id = '$data->id'
            ");
            break;

        case "product_search":
            $output['result'] = makeQuery(makeConn(), "SELECT 
                *
                FROM `products`
                WHERE 
                    `name` LIKE '%{$data->search}%' OR
                    `description` LIKE '%{$data->search}%' OR
                    `category` LIKE '%{$data->search}%'
                ORDER BY `date_create` DESC
                LIMIT 12
            ");
            break;

        case "product_filter":
            $output['result'] = makeQuery(makeConn(), "SELECT 
                *
                FROM `products`
                WHERE `$data->column` = '$data->value'
                ORDER BY `date_create` DESC
                LIMIT 12
            ");
            break;

        case "product_sort":
            $output['result'] = makeQuery(makeConn(), "SELECT 
                *
                FROM `products`
                ORDER BY `$data->column` $data->dir
                LIMIT 12
            ");
            break;

        default:
            $output['error'] = "No Matched Type";
    }
}

// Return the output as JSON
echo json_encode(
    $output,
    JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE
);