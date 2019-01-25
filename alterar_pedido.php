<?php
require_once 'config.php';
//header("Content type: ")

$con = mysqli_connect(DB_SERVER,DB_USUARIO,DB_SENHA,DB_BANCO);

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    if(isset($_POST['Alterar'])) {
   

        $sql = "update pedido set descricao = '".$_POST['descricao']."', valor = '".$_POST['valor']."', dataa = '".$_POST['dataa']."' where id = ".$id;
		
        if($con->query($sql) == true){
            echo
            "<script>
                alert('Pedido Alterado com sucesso!');
                window.location.href='historico_pedidos.php';
                </script>";
        }else{
            echo
            "<script>
                alert('Erro ao Alterar o Pedido!');
                window.location.href='realizar_pedido.php';
                </script>";
        }


    $con->close();
    } 
    else {
        header("location:historico_pedidos.php");
    }
}
else {
    header("location:historico_pedidos.php");
}
?>