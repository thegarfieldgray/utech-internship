<?php

$servername = "localhost";
$db_name = 'intern';
$username = "root";
$password = "admin";

$key = md5('bigdata');
	
$handler = mysqli_connect($servername, $username, $password);
	if (!$handler){
		echo "<b>ERROR: </b>".mysql_connect_error();
		die();
	}else {
		echo " Connected! <br>";
		mysqli_select_db($handler, $db_name);
	}

function sanitizeInput($handler, $string) {
	$string = mysqli_real_escape_string($handler, trim(strip_tags(addslashes($string))));
	return $string;
}

function encode($data, $key){
	$data = rtrim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $data, MCRYPT_MODE_ECB)));
	return $data;
}

function decode($data, $key){
	$data = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, base64_decode($data), MCRYPT_MODE_ECB));
	return $data;
}

?>