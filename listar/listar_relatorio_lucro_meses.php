<?php
session_start();

require_once '../config.php';

$con = new PDO(SERVIDOR, USUARIO, SENHA);
$sql = $con->prepare("select YEAR(dataa) as 'anoPedido',
		MONTH(dataa) as 'mesPedido',  
        MONTHNAME(dataa) as 'nomeMes',
        sum(valor) as 'totalMes'
        from pedido
        where dataa BETWEEN now() - INTERVAL 12 MONTH and NOW()	
        and empresa_id = ?
        group by 1,2
        order by 1,2 asc;");
$sql->execute(array($_SESSION['empresaId']));
$a = $sql->fetchAll(PDO::FETCH_CLASS);


echo json_encode($a);
$_SESSION['a'] = $a;

?>