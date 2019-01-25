<?php

session_start();
require_once 'config.php';



function listarPedidos(){
	$conn = mysqli_connect(DB_SERVER,DB_USUARIO,DB_SENHA,DB_BANCO);
	
	$sql = "select p.id as 'idPedido',
	p.descricao as 'descPedido',
	p.valor as 'valorPedido',
	date_format(p.dataa, '%d/%m/%Y') as 'dataPedido',
	c.tipo as 'tipoCategoria',
	(case when p.motoboy_id is not null then m.nomecomp END ) as 'nomeMotoboy'
	from pedido p
	inner join categoria c 
	on p.categoria_id = c.id
	inner join motoboy m
	on (p.motoboy_id = m.id
	or p.motoboy_id is null)
	where p.empresa_id = '".$_SESSION['empresaId']."'";
	
	$result = $conn->query($sql);
	
	if($result->num_rows >0){
		return $lista = mysqli_fetch_all($result,MYSQLI_ASSOC);
	}
	else{
		return 0;
	}
	$conn->close();
}

function listarPedidosid($id){
    
    $con = new PDO(DB_SERVER,DB_BANCO,DB_USUARIO,DB_SENHA);
    $sql = $con->prepare('select p.id as "idPedido",
	p.descricao as "descPedido",
	p.valor as "valorPedido",
	date_format(p.dataa, "%d/%m/%Y") as "dataPedido",
	c.tipo as "tipoCategoria",
	m.nomecomp as "nomeMotoboy"
	from pedido p
	inner join categoria c 
	on p.categoria_id = c.id
	inner join motoboy m
	on p.motoboy_id = m.id
	where p.id =?');
	$sql->execute(array($id));
    $r =$sql->fetchObject();
    return $r;

}

?>