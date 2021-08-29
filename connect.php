<?php
	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASSWORD', '');
	define('DB', 'uhas_mida');


function connectDB(){
	$conn = new mysqli(HOST, USER, PASSWORD, DB);
	if(!$conn){
		die('Connection Error: '. $conn->error());
	}
	return $conn;
}

$connect = connectDB();


?>