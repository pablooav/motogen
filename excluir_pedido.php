<?php
require_once 'config.php';
//header("Content type: ")

$con = mysqli_connect(DB_SERVER,DB_USUARIO,DB_SENHA,DB_BANCO);

if(isset($_GET["id"])) {

    if(!empty($_GET["id"])) {

   

        $sql = "delete from pedido where id = ".$_GET['id'].";";
        
        
		
        if($con->query($sql) == true){
            echo
            "<script>
                alert('Pedido Excluido com sucesso!');
                window.location.href='historico_pedidos.php';
                </script>";
        }else{
            echo
            "<script>
                alert('Erro ao Excluir o Pedido!');
                window.location.href='historico_pedidos.php';
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