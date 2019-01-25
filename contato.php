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
			
						<h3><center>Contato:</center></h3>
						<p>								
						<div class="col-sm-2"></div>
						<div class="col-sm-8">						
							<div class="row">
							<div class="line"></div>
			
							<p><b>Entre em contato pelo formuário ou telefone abaixo:</p></b>
							<p><b>Telefone (31) 0800 302 020</p></b>

							<form name="formulario" action="" method="post">
								<input type=hidden name="destino" value="luciopedersoli@outlook.com">
								<input type=hidden name="enviado" value="C:\wamp64\www\Motogen_SITE_1.1\enviado.php">
								<p><b>Nome:</b><br>
								<input type=text class="form-control" name="nome" size="45"></p><br>
								<p><b>Email:</b><br>
								<input type=text class="form-control" name="email" size="45"></p><br>
								<p><b>Assunto:</b><br>
								<input type=text class="form-control" name="assunto" size="45"></p><br>
								<p><b>Mensagem:</b><br>
								<textarea name="Mensagem" class="form-control" rows="5" cols="60" wrap="virtual"></textarea></p><br>
								<p><input type="submit" class="btn btn-default" value="Cadastrar"> <input type="reset" class="btn btn-default" value="Limpar formulário"></p><br><br><br><br>
							</form></div>
							<div class="col-sm-3"></div>
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
