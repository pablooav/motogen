<?php
session_start();

require_once '../config.php';

$con = new PDO(SERVIDOR, USUARIO, SENHA);
$sql = $con->prepare("SELECT m.nomecomp as 'nomeMotoboy',  SUM(valor) as 'valorMotoboy' FROM pedido p right JOIN motoboy m ON p.motoboy_id = m.id where p.empresa_id = ? group by motoboy_id order by nomeMotoboy asc;");
$sql->execute(array($_SESSION['empresaId']));
$a = $sql->fetchAll(PDO::FETCH_CLASS);


echo json_encode($a);
$_SESSION['a'] = $a;

?>