<?php
session_start();
require_once '../config.php';
//header("Content type: ")


$con = mysqli_connect(DB_SERVER,DB_USUARIO,DB_SENHA,DB_BANCO);

if(isset($_POST['usuario'])) {


    if (!empty($_POST['usuario'])) {

            $sql = "insert into usuariolg (id,nome,email,senha) values(null,'".$_POST['usuario']['nome']."','".$_POST['usuario']['email']."','".$_POST['usuario']['senha']."');"; // ta dando erro nessa linha
		
        if($con->query($sql) == true){
            $_SESSION['email'] = $_POST['usuario']['email'];
            $_SESSION['senha'] = $_POST['usuario']['senha'];
            echo
            "<script>
                alert('Preencha os dados a seguir para concluir o cadastro de sua empresa!!');
                
                window.location.href='autenticacao.php?cad=empresa';
                </script>";
        }else{
            echo
            "<script>
                alert('Erro ao cadastrar o Usuario!');
                window.location.href='registrar.php';
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