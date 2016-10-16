<?php


$host = "localhost";
$db_name = "bd_users";
$username = "root";
$password = "12345";


try{

	$conexion = new PDO("mysql:host={$host}; dbname={$db_name}", $username, $password);

}

//to handle connection error
catch(PDOException $ exception){
	echo "Connection error: " . $exception->getMessage();
}

