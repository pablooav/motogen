<?php
session_start();
require_once 'config.php';
//header("Content type: ")

$con = mysqli_connect(DB_SERVER,DB_USUARIO,DB_SENHA,DB_BANCO);

if(isset($_POST["descricao"]) && isset($_POST["valor"]) && isset($_POST["data"])   && !empty($_POST["categoria_id"]) && isset($_POST["motoboy_id"])) {

    if (!empty($_POST["descricao"]) && ($_POST["valor"]) && !empty($_POST["data"])  && !empty($_POST["categoria_id"]) && !empty($_POST["motoboy_id"])) {

        $sql = "insert into pedido(id,descricao,valor,dataa,categoria_id,motoboy_id,empresa_id) values(null,'".$_POST['descricao']."','".$_POST['valor']."','".$_POST['data']."','".$_POST['categoria_id']."','".$_POST['motoboy_id']."','".$_SESSION['empresaId']."');";
        
		
        if($con->query($sql) == true){
            echo
            "<script>
                alert('Pedido cadastrado com sucesso!');
                window.location.href='historico_pedidos.php';
                </script>";
        }else{
            echo
            "<script>
                alert('Erro ao cadastrar o Pedido!');
           
                </script>";
                
                //     window.location.href='realizar_pedido.php';
        }


    $con->close();
    } 
    else {
        header("location:realizar_pedido.php");
    }
}
else {
    header("location:realizar_pedido.php");
}
?>