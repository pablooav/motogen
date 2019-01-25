<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Motogen - Realizar Pedido</title>

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
            <div id="content" class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
			
			<!-- Incluir menu superior -->
			<?php include ("includes/menu2.php"); ?>

               
					<h3><center>Realize pedido:</center></h3>
						<p>	
						<div class="col-sm-2"></div>
						<div class="col-sm-8">						
							<div class="row">	
							
							<div class="line"></div>
							<form action="inserir_pedido.php" method="post">
								<p><b>Descrição do produto:</b><br>
								<input type=text class="form-control" name="descricao" size="45"></p><br>
								
								<p><b>Valor:</b><br>
								<input type="number" class="form-control"  name="valor" size="45"></p><br>
								
								<p><b>Data de realização:</b><br>
								<input type="date" class="form-control" name="data" size="45"></p><br>
									
								<p><b>Categoria:</b><br>
								<select name="categoria_id" class="form-control">
								<?php
								require_once 'listar/listar_categoria.php';
								$dados = listarCategoria();
								?>
								<?php if ($dados) : ?>
								<?php foreach ($dados as $categoria) : ?>
									<option value=<?php echo $categoria['id']; ?>> <?php echo $categoria['tipo']; ?></option>
									<?php endforeach; ?>
									<?php else : ?>
										<option > Nenhum registro encontrado </option>
									<?php endif; ?>
								</select>
								
								</select><br>
								<p><b>Motoboy:</b><br>
								<select name="motoboy_id" class="form-control">
								<?php
								require_once 'listar/listar_motoboy.php';
								$dados = listarMotoboy();
								?>
								<?php if ($dados) : ?>
								<?php foreach ($dados as $motoboy) : ?>
									<option value=<?php echo $motoboy['id']; ?>> <?php echo $motoboy['nomecomp']; ?></option>
									<?php endforeach; ?>
									<?php else : ?>
										<option > Nenhum registro encontrado </option>
									<?php endif; ?>
								</select><br>
								<p><input type="submit" class="btn btn-default" value="Cadastrar"> <input type="reset" class="btn btn-default" value="Limpar Cadastro"></p><br><br><br><br>	
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
