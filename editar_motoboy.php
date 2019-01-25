<?php


require_once 'listar/listar.php';

$dados = listarMotoboyId($_GET['id']);



?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Motogen EMPRESA</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="style.css">
		<link rel="shortcut icon" href="login/img/motogen.ico" />
    
    </head>
    <body>

    	   <div class="wrapper">
            
			<!-- Incluir menu de lado -->
           <?php include ("includes/menu.php"); ?>

            <!-- Page Content Holder -->
            <div id="content" class="col-md-12">
			
			<!-- Incluir menu superior -->
			<?php include ("includes/menu2.php"); ?>

				<h3><center>Altere as informções do motoboy:</center></h3>
						<p>	
						<div class="col-sm-2"></div>
						<div class="col-sm-8">						
						<div class="row">
							<form action="alterar_motoboy.php?id=<?php echo $dados['id']; ?>" method="post">								
									<div class="form-grup">
										<label for="nomecomp">Nome Completo:</label>
										<input type=text name="nomecomp" class="form-control" value="<?php echo $dados['nomecomp']; ?>" required><?php echo $dados['nomecomp']; ?></input>	
									</div>						
									<div class="form-grup">
									<p><b>CPF:</b><br>
									<input type=text name="cpf"  class="form-control" size="45" value="<?php echo $dados['cpf']; ?>"required>

									<div class="form-grup">
									<p><b>Telefone:</b><br>
									<input type=text name="telefone"  class="form-control" size="45" value="<?php echo $dados['telefone']; ?>"required>

									<div class="form-grup">
									<p><b>Placa Veículo</b><br>
									<input type=text name="placa" class="form-control" size="45" value="<?php echo $dados['placa']; ?>"required>							

									<p><input type="submit" class="btn btn-default" name="Alterar"> <input type="reset" class="btn btn-default" value="Limpar Cadastro"></p>
								</form>
								<div class="col-sm-2"></div>
							</div>				
						</div>
			</div>
		</div>



        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <!-- Incluir animações do menu -->
			 <?php include ("includes/script.php"); ?>
         
    </body>
</html>




