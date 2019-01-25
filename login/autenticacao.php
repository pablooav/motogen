<?php
session_start();


if(isset($_SESSION['email']) && isset($_SESSION['senha']) ){
   
    
  
    $con = new PDO("mysql:host=localhost; dbname=u186057129_motog;", "u186057129_root", "nareba");
    $sql = $con->prepare("SELECT * FROM usuariolg WHERE email=? AND senha=?");
    $sql->execute(array($_SESSION['email'], $_SESSION['senha']));
    $usuario = $sql->fetchObject();
    
        if($_GET['cad'] == "empresa" && $usuario != null ){
            $_SESSION['usuarioId'] = $usuario->id;
            header("Location: empresa.php");
        }
        else if($usuario != null){
            $_SESSION['usuarioId'] = $usuario->id;
            header("Location: ../relatorios.php");
        }
        else{
            unset($_SESSION['usuario']);
            $_SESSION['msg']="Usuário ou senha inválido, tente novamente!";
            header("Location: logar.php");
        }
    
    
    
} 
else if(isset($_POST['usuario']['email']) && isset($_POST['usuario']['senha']))
{
    
    $con = new PDO("mysql:host=localhost; dbname=u186057129_motog;", "u186057129_root", "nareba");
    $sql = $con->prepare("SELECT * FROM usuariolg WHERE email=? AND senha=?");
    $sql->execute(array($_POST['usuario']['email'], $_POST['usuario']['senha']));
    $usuario = $sql->fetchObject();
    
        if($usuario != null){
            $_SESSION['empresaId'] = $usuario->empresa_id;
            $_SESSION['email'] = $usuario->email;
            $_SESSION['senha'] = $usuario->senha;
            header("Location: ../relatorios.php");
        }
        else{
            unset($_SESSION['usuario']);
            $_SESSION['msg']="Usuário ou senha inválido, tente novamente!";
            header("Location: logar.php");
        }

}

else
{
    header("Location: logar.php");
}

?>