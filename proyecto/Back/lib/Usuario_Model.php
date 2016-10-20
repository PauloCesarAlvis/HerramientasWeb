<?php 
//creacion de una clase en PHP
class Usuario_Model {

	//declaracion de una funcion en php para obtener usuarios
	function getUsers(){

		//importa una porcion de codigo para conectar a la base de datos
		include 'lib/database.php';
		//crea la consulta
		$consulta = "select * from users";
		//ejecuta la consulta
		$result = $conexion->query($consulta);
		//retorna el resultado en un objeto PDOStatement
		return $result;
	}

	//funcion para agregar los usuarios
	//recibe 3 parametros, nombre, edad y username, inician con $ siempre en PHP
	function addUser($nombre, $edad, $username){

		//importa una porcion de codigo para conectar a la base de datos
		include 'lib/database.php';
		//crea una consulta parametrizable cada ? es un parametro a llenar

	$consulta = "INSERT INTO users SET nombre = ?, edad = ?, username = ?";
	//prepara la consulta para ser parametrizada 
	$sentencia = $conexion->prepare($consulta);
	//agrega cada uno de los parametros a la consulta
	$sentencia->bindParam(1, $nombre);
	$sentencia->bindParam(2, $edad);
	$sentencia->bindParam(3, $username);
	//ejecuta la consulta
	if ($sentencia->execute) {
		return "agregado";
	}else{
		return "no agregado";
	}


	}



}
?>