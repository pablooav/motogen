<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Motogen - Pedidos</title>

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
            <div id="content" class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
			
			<!-- Incluir menu superior -->
			<?php include ("includes/menu2.php"); ?>
				
				<h3><center>Histórico de pedidos:</center></h3>
				<p>                 
				<div class="col-sm-1 col-md-1 col-lg-1 col-xs-1"></div>
						<div class="col-sm-10 col-lg-10 col-md-10 col-xs-10">						
							<div class="row">
								<div class="line"></div>
								<p>
							</div>						
							<table>
								<thead>
									<tr>									
									<th>Descrição</th>
									<th>Valor (R$)</th>
									<th>Data</th>
									<th>Categoria</th>					
									<th>Motoboy</th>
									<th>Opções</th>	

									</tr>
								</thead>
								<tbody>
									<?php
									require_once 'listar/listar_pedidos.php';	
									$dados = listarPedidos();
									?>
									<?php if($dados) : ?>
									<?php foreach($dados as $pedido) : ?>
									<tr>									
									<td><?php echo $pedido['descPedido']?></td>
									<td><?php echo $pedido['valorPedido']?></td>
									<td><?php echo $pedido['dataPedido']?></td>	
									<td><?php echo $pedido['tipoCategoria']?></td>		
									<td><?php echo $pedido['nomeMotoboy']?></td>	
									<td>
										<a href="excluir_pedido.php?id=<?php echo $pedido['idPedido'];?>" class="btn btn-danger">Excluir</a>
										<a href="editar_pedido.php?id=<?php echo $pedido['idPedido'];?>" class="btn btn-info">Alterar</a>

									</td>
									</tr>
									
									<?php endforeach; ?>
									<?php else : ?>
									<tr>
									<td colspan="6"> Nenhum registro encontrado.</td>
									</tr>
									<?php endif; ?>
								</tbody>
							</table>
					</div>
				<div class="col-sm-1 col-lg-1 col-md-1 col-xs-1"></div>
			</div>
        </div>
		
	
</body>
        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <!-- Incluir animações do menu -->
			
         
    
     <?php include ("includes/script.php"); ?>
</html>
