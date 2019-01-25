<?php

require_once 'config.php';

$dados = listarUsuario();

function listarUsuario(){
	$conn = mysqli_connect(DB_SERVER,DB_USUARIO,DB_SENHA,DB_BANCO);
	
	$sql = "select * from usuario ";
	
	$result = $conn->query($sql);
	
	if($result->num_rows >0){
		return $lista = mysqli_fetch_all($result,MYSQLI_ASSOC);
	}
	else{
		return 0;
	}
	$conn->close();
}

function listarUsuarioid($id){
	$conn = mysqli_connect(DB_SERVER,DB_USUARIO,DB_SENHA,DB_BANCO);
	
	$sql = "select * from usuario where id ='".$id."'";
	
	$result = $conn->query($sql);
	
	if($result->num_rows >0){
		return $lista = mysqli_fetch_assoc($result);
	}
	else{
		return 0;
	}
	$conn->close();
}

?>