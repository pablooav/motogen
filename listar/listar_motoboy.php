<?php

session_start();
require_once 'config.php';

$dados = listarMotoboy();

function listarMotoboy(){
	$conn = mysqli_connect(DB_SERVER,DB_USUARIO,DB_SENHA,DB_BANCO);
	
	$sql = "select * from motoboy where empresa_id = '".$_SESSION['empresaId']."'";
	
	$result = $conn->query($sql);
	
	if($result->num_rows >0){
		return $lista = mysqli_fetch_all($result,MYSQLI_ASSOC);
	}
	else{
		return 0;
	}
	$conn->close();
}

function listarMotoboyid($id){
    
    $con = new PDO(DB_SERVER,DB_BANCO,DB_USUARIO,DB_SENHA);
    $sql = $con->prepare("select * from motoboy where id =? and empresa_id = ?");
	$sql->execute(array($id, $_SESSION['empresaId']));
    $r =$sql->fetchObject();
    return $r;


}

?>