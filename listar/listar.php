<?php 
session_start();
require_once 'config.php';


function listarMotoboy(){
	
	$conn = mysqli_connect(DB_SERVER,DB_USUARIO,DB_SENHA,DB_BANCO);

	$sql = "select * from motoboy;";

	$result = $conn->query($sql);

	if($result->num_rows > 0){

		return $lista = mysqli_fetch_all($result,MYSQL_ASSOC);

	}
	else{
		echo "nenhum valor encontrado";
	}
	$conn->close();
	}
	

	function listarMotoboyId($id){
	
	$con = mysqli_connect(DB_SERVER,DB_USUARIO,DB_SENHA,DB_BANCO);

    $sql = "select * from motoboy where id = '".$id."' and empresa_id = '".$_SESSION['empresaId']."'";

	$result = $con->query($sql);

		if($result->num_rows > 0){

		return $lista = mysqli_fetch_assoc($result);

	}else{
		return 0;
	}
	}	

	function listarPedidos(){
	
	$conn = mysqli_connect(DB_SERVER,DB_USUARIO,DB_SENHA,DB_BANCO);

	$sql = "select * from pedido;";

	$result = $conn->query($sql);

	if($result->num_rows > 0){

		return $lista = mysqli_fetch_all($result,MYSQL_ASSOC);

	}
	else{
		echo "nenhum valor encontrado";
	}
	$conn->close();
	}
	

	function listarPedidosId($id){
	
	$con = mysqli_connect(DB_SERVER,DB_USUARIO,DB_SENHA,DB_BANCO);

	$sql = "select p.id as 'idPedido',
	p.descricao as 'descPedido',
	p.valor as 'valorPedido',
	p.dataa as 'dataPedido',
	c.tipo as 'tipoCategoria',
	m.nomecomp as 'nomeMotoboy'
	from pedido p
	inner join categoria c 
	on p.categoria_id = c.id
	inner join motoboy m
	on p.motoboy_id = m.id
	where p.id ='".$id."'
	and p.empresa_id = '".$_SESSION['empresaId']."'";

	$result = $con->query($sql);

	if($result->num_rows > 0){

		return $lista = mysqli_fetch_assoc($result);

	}else{
		return 0;
	}
	}
	
	function listarEmpresa(){
	$conn = mysqli_connect(DB_SERVER,DB_USUARIO,DB_SENHA,DB_BANCO);
	
	$sql = "select * from empresa";
	
	$result = $conn->query($sql);
	
	if($result->num_rows >0){
		return $lista = mysqli_fetch_all($result,MYSQLI_ASSOC);
	}
	else{
		return 0;
	}
	$conn->close();
	}

	function listarEmpresaid($id){
	$conn = mysqli_connect(DB_SERVER,DB_USUARIO,DB_SENHA,DB_BANCO);
	
	$sql = "select * from empresa where id ='".$id."'";
	
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