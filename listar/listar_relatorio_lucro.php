<?php

require_once 'config.php';

$dados = listarLucro();

function listarLucro(){
	$conn = mysqli_connect(DB_SERVER,DB_USUARIO,DB_SENHA,DB_BANCO);
	
	$sql = "SELECT e.cnpj as 'Cnpj',e.razao_social as 'RazaoSocial',DATEDIFF(NOW(), data_criacao) as 'DiasCriacao', SUM(p.valor) as 'LucroTotal' from empresa e INNER join pedido p";
	
	$result = $conn->query($sql);
	
	if($result->num_rows >0){
		return $lista = mysqli_fetch_all($result,MYSQLI_ASSOC);
	}
	else{
		return 0;
	}
	$conn->close();
}


?>