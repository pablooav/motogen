<?php
session_start();
require_once '../config.php';
//header("Content type: ")


$con = mysqli_connect(DB_SERVER,DB_USUARIO,DB_SENHA,DB_BANCO);

if(isset($_POST['empresa'])) {


    if (!empty($_POST['empresa'])) {

    $con = new PDO("mysql:host=localhost; dbname=u186057129_motog;", "u186057129_root", "nareba");
    $sql = $con->prepare("insert into empresa values
    (null,?,?,?,?,?,?,?,?,?,?,?,?,?);");
    
    $sql->execute(array($_POST['empresa']['cnpj'],
    $_POST['empresa']['razaoSocial'],
    $_POST['empresa']['nomeFantasia'],
    $_POST['empresa']['inscEstadual'],
    $_POST['empresa']['comp'],
    $_POST['empresa']['num'], 
    $_POST['empresa']['bairro'],
    $_POST['empresa']['uf'],
    $_POST['empresa']['cidade'],
    $_POST['empresa']['cep'],
    $_POST['empresa']['telefone'],
    $_POST['empresa']['email'],
    $_POST['empresa']['data']));
    
    


		
    if($sql->rowCount() > 0){

    $sql = $con->prepare("select id from empresa where cnpj = ?");
    $sql->execute(array($_POST['empresa']['cnpj']));
    $empresa = $sql->fetchObject();

    if($empresa){
        $sql = $con->prepare("update usuariolg set empresa_id=? where id=?");
        $sql->execute(array($empresa->id, $_SESSION['usuarioId']));
        if($sql->rowCount() > 0){
            $_SESSION['empresaId'] = $empresa->id;
            echo
            "<script>
                alert('Empresa cadastrada com sucesso!');
                
                window.location.href='../relatorios.php';
                </script>";
                
        }
        
    }
    
    }
        
        
        else{
            echo
            "<script>
                alert('Erro ao cadastrar o empresa!');
               
                </script>";
        }


    $con->close();
    } 
    else {
        alert('Erro cadastro vazio');
        header("location:logar.php");
    
        
    }
}
else { echo "<script>
                alert('Erro no isset POST!');
                window.location.href='registrar.php';
                </script>";
}
?>