<?php 

	function print_p($v) {
		echo "<pre>",print_r($v),"</pre>";
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



	include "auth.php";

	function makeConn() {

			$conn = new mysqli(...MYSQLIAuth());
			if($conn->connect_errno) die($conn->connect_error);
			$conn->set_charset('utf8');
			return $conn;
		}

		function makeQuery($conn,$qry){
			$result = $conn->query($qry);
			if($conn->errno) die($conn->error);
			$a = [];
			while($row = $result->fetch_object()) {
				$a[] = $row;
			}
			return $a;

	}
