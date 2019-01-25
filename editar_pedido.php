<?php

require_once 'listar/listar.php';

$dados = listarPedidosId($_GET['id']);


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

				<h3><center>Realize pedido:</center></h3>
						<p>	
						<div class="col-sm-2"></div>
						<div class="col-sm-8">						
						<div class="row">
							<form action="alterar_pedido.php?id=<?php echo $dados['idPedido'];?>" method="post">

								<div class="form-grup">								
									<label for="descricao">Descrição:</label>
								<input type=text class="form-control" name="descricao" size="45" value="<?php echo $dados['descPedido']; ?>" required></p><br>
								</div>

								<div class="form-grup">								
									<label for="valor">Valor:</label>
								<input type="number" class="form-control" name="valor" size="45" value="<?php echo $dados['valorPedido']; ?>" required></p><br>
								</div>

								<div class="form-grup">								
									<label for="data">Data de realização:</label>
								<input type="date" class="form-control" name="dataa" size="45" value="<?php echo 
								$dados['dataPedido']; ?>" required></p><br>
								</div>

								<p><input type="submit" class="btn btn-default" name="Alterar"> <input type="reset" class="btn btn-default" value="Limpar"></p><br><br><br><br>	
							</form>
								<div class="col-sm-2"></div>
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




