<?php 


function print_p($v) {
			echo "<pre>" ,print_r($v),"</pre>";
	}

function file_get_json($filename) {
	$file = file_get_contents($filename);
	return json_decode($file);
}


function editUserPage($data)
{
$json_arr = array(json_decode($data, true));
foreach ($json_arr as $key => $value) {
    if ($value['CELL_NAME'] == $_POST['in_cell']) {
    $json_arr[$key]['@25'] = $_POST['in_remark'];
    }
}

file_put_contents('../data/users.json', json_encode($json_arr));
}