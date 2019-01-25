<?php
require_once 'config.php';
//header("Content type: ")

$con = mysqli_connect(DB_SERVER,DB_USUARIO,DB_SENHA,DB_BANCO);

if(isset($_GET["id"])) {

    if(!empty($_GET["id"])) {

   

        $sql = "delete from motoboy where id = '".$_GET['id']."'";
        
        
		
        if($con->query($sql) == true){
            echo
            "<script>
                alert('Motoboy Excluido com sucesso!');
                window.location.href='motoboy_cadastrado.php';
                </script>";
        }else{
            echo
            "<script>
                alert('Erro ao Excluir o Motoboy!');
                window.location.href='motoboy_cadastrado.php';
                </script>";
        }


    $con->close();
    } 
    else {
        header("location:motoboy_cadastrado.php");
    }
}
else {
    header("location:motoboy_cadastrado.php");
}
?>