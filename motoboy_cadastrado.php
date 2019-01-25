<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Motogen - Motoboys</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="style.css">
		<link rel="shortcut icon" href="img/motogen.ico"/>
		
    
    </head>
	
	<style>
		table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
	</style>
	
	
    <body>
		
		<div class="wrapper">
            
			<!-- Incluir menu de lado -->
           <?php include ("includes/menu.php"); ?>

            <!-- Page Content Holder -->
            <div id="content" class="col-md-12">
			
			<!-- Incluir menu superior -->
			<?php include ("includes/menu2.php"); ?>

               
					<h3><center>Motoboy's Cadastrados:</center></h3>
						<p>	
						<div class="col-sm-1"></div>
						<div class="col-sm-10">						
							<div class="row">
							<div class="line"></div>
				
										<table>
										<thead>
											<tr>											
											<th>Nome Completo</th>
											<th>CPF</th>											
											<th>Telefone</th>
											<th>Placa Veículo</th>
											<th>Opções</th>	
											</tr>
										</thead>
										<tbody>
											<?php
											require_once 'listar/listar_motoboy.php';
											?>
											<?php if($dados) : ?>
											<?php foreach($dados as $motoboy) : ?>
											<tr>											
											<td><?php echo $motoboy['nomecomp']?></td>											
											<td><?php echo $motoboy['cpf']?></td>											
											<td><?php echo $motoboy['telefone']?></td>
											<td><?php echo $motoboy['placa']?></td>
										<td><a href="excluir_motoboy.php?id=<?php echo $motoboy['id'] ;?>" class="btn btn-danger">Excluir</a>
										<a href="editar_motoboy.php?id=<?php echo $motoboy['id'];?>" class="btn btn-info">Alterar</a>
													
											</tr>
											
											<?php endforeach; ?>
											<?php else : ?>
											<tr>
											<td colspan="6"> Nenhum registro encontrado.</td>
											</tr>
											<?php endif; ?>
										</tbody>
									</table>
								<div class="col-sm-1"></div>
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

	
	
		