<?php
require_once 'config.php';
//header("Content type: ")

$con = mysqli_connect(DB_SERVER,DB_USUARIO,DB_SENHA,DB_BANCO);

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    if(isset($_POST['Alterar'])) {   

        $sql = "update motoboy set nomecomp = '".$_POST['nomecomp']."', cpf = '".$_POST['cpf']."', telefone = '".$_POST['telefone']."', placa = '".$_POST['placa']."' where id = ".$id;
        
        
		
        if($con->query($sql) == true){
            echo
            "<script>
                alert('Motoboy Alterado com sucesso!');
                window.location.href='motoboy_cadastrado.php';
            </script>";
        }else{
            echo
            "<script>
                alert('Erro ao Alterar o Motoboy!');
                window.location.href='cadastrar_motoboy.php';
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