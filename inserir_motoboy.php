<?php
require_once '../config.php';
//header("Content type: ")

$con = mysqli_connect(DB_SERVER,DB_USUARIO,DB_SENHA,DB_BANCO);

if(isset($_POST["nomecomp"]) && isset($_POST["cpf"])  && isset($_POST["telefone"]) && isset($_POST["placa"])) {

    if (!empty($_POST["nomecomp"]) && !empty($_POST["cpf"])  && !empty($_POST["telefone"]) && !empty($_POST["placa"])) {

        $sql = "insert into motoboy(id,nomecomp,cpf,telefone,placa) values(null,'".$_POST['nomecomp']."','".$_POST['cpf']."','".$_POST['telefone']."','".$_POST['placa']."');";
		
        if($con->query($sql) == true){
            echo
            "<script>
                alert('Motoboy cadastrado com sucesso!');
                window.location.href='motoboy_cadastrado.php';
                </script>";
        }else{
            echo
            "<script>
                alert('Erro ao cadastrar o Motoboy!');
                window.location.href='cadastrar_motoboy.php';
                </script>";
        }


    $con->close();
    } 
    else {
        header("location:cadastrar_motoboy.php");
    }
}
else {
    header("location:cadastrar_motoboy.php");
}
?>