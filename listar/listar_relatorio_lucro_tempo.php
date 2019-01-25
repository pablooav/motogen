<?php
session_start();

require_once '../config.php';

$con = new PDO(SERVIDOR, USUARIO, SENHA);
$sql = $con->prepare("select YEAR(dataa) as 'anoPedido',
		MONTH(dataa) as 'mesPedido',  
        MONTHNAME(dataa) as 'nomeMes',
        sum(valor) as 'totalMes'
        from pedido
        where dataa BETWEEN ?  and ?
        and empresa_id = ?
        group by 1,2
        order by 1,2 asc;");
$sql->execute(array($_GET['data1'],$_GET['data2'], $_SESSION['empresaId']));
$a = $sql->fetchAll(PDO::FETCH_CLASS);


echo json_encode($a);
$_SESSION['a'] = $a;

?>