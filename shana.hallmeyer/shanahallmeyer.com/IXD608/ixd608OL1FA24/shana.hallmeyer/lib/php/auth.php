<?php 

function MYSQLIAuth(){
	return[
		"localhost", // mysql host
		"shana-backend-dev", // mysql user
		"shana-backend-dev", // mysql pass
		"shana-backend-dev" // mysql database
	];
}


function PDOAuth(){
	return[
		"mysql:host=localhost;dbname=shana-backend-dev", // host and database name
		"shana-backend-dev", // mysql user
		"shana-backend-dev", // mysql pass
		[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
	];
}

