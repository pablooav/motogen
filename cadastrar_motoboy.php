<?php
require_once 'config.php';
session_start();

if(isset($_POST['motoboy'])){
    
    
    $con = new PDO("mysql:host=localhost; dbname=u186057129_motog;", "u186057129_root", "nareba");
    $sql = $con->prepare("insert into motoboy values
    (null,?,?,?,?,?);");
    
    $sql->execute(array($_POST['motoboy']['nome'],
    $_POST['motoboy']['cpf'],
    $_POST['motoboy']['telefone'],
    $_POST['motoboy']['placa'],
    $_SESSION['empresaId']));


    
	
    if($sql->rowCount()>0){
        echo
        "<script>
        alert('Motoboy cadastrado com sucesso!')
        window.location.href='motoboy_cadastrado.php';
        </script>
        ";
    
    }
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Motogen - Cadastrar Motoboy</title>

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="style.css">
		<link rel="shortcut icon" href="img/motogen.ico"/>
		<script src="https://www.gstatic.com/firebasejs/5.5.0/firebase.js"></script>
      <script>
          function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}
      </script>
    </head>
    <body>
	
	<div class="wrapper">
            
			<!-- Incluir menu de lado -->
           <?php include ("includes/menu.php"); ?>

            <!-- Page Content Holder -->
            <div id="content" class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
			
			<!-- Incluir menu superior -->
			<?php include ("includes/menu2.php"); ?>

               
					<h3><center>Cadastre seu Motoboy:</center></h3>
						<p>	
						<div class="col-sm-2"></div>
						<div class="col-sm-8">						
							<div class="row">
							<div class="line"></div>
								<form id="formMotoboy" name="formMotoboy" action="" method="post">
									<input type=hidden name="destino" value="luciopedersoli@outlook.com">
									<input type="hidden" hidden id="empresaId" name="empresaId" value="<?php echo $_SESSION['empresaId'];?>"/>
									<input type=hidden name="enviado" value="C:\wamp64\www\Motogen_SITE_1.1\enviado.php">
									<p><b>Nome Completo:</b><br>
									<input type='text' id="nome" name="motoboy[nome]" class="form-control" size="45"></p><br>
									<p><b>Email:</b><br>
									<input type='email' id="email" name="motoboy[email]" class="form-control" size="45"></p><br>
									<p><b>Senha:</b><br>
									<input type='password' id="senha" name="motoboy[senha]" class="form-control" size="45"></p><br>
									<p><b>Telefone:</b><br>
									<input type='text' id="telefone" name="motoboy[telefone]" class="form-control" maxlength="11" size="45"></p><br>
									<p><b>Placa Veículo:</b><br>
									<input type='text' id="placa" name="motoboy[placa]"  class="form-control" style="text-transform:uppercase" maxlength="7" size="45"></p><br>
									<p><b>CPF:</b><br>
									<input type='text' id="cpf"  name="motoboy[cpf]"  class="form-control" maxlength="11" size="45"></p><br>									
									<p><button type="button" id="insertMotoboy" class="btn btn-default">Cadastrar</button> <input type="reset"  class="btn btn-default" value="Limpar Cadastro"></p>
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
         
         
         
         <script src="https://www.gstatic.com/firebasejs/5.5.9/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyCmMl2aWHZz0Qc4iTMDlem-SF7GkZUnTn8",
    authDomain: "motogenmotoboy.firebaseapp.com",
    databaseURL: "https://motogenmotoboy.firebaseio.com",
    projectId: "motogenmotoboy",
    storageBucket: "motogenmotoboy.appspot.com",
    messagingSenderId: "649773910188"
  };
  firebase.initializeApp(config);
  
    function insertAutoKey(nome, cpf, telefone, placa, email, senha,empresaId) {
            // A post entry.
            
            var postData = {
                nome: nome,
                cpf: cpf,
                telefone: telefone,
                placa: placa,
                email: email,
                senha: senha,
                empresaId: empresaId
            };
            
            console.log(postData);
            
             // Get a key for a new Post.
            var newPostKey = firebase.database().ref().child('motoboy').push().key;
            // Write the new post's data simultaneously in the posts list and the user's post list.
            var updates = {};
            updates['/motoboy/' + newPostKey] = postData;
            
            console.log(updates);
            
           return firebase.database().ref().update(updates, function(error){
               
               
            if(error){
                console.log("lombrou");
            }   
            else{
      
                var i = 0;
                firebase.auth().createUserWithEmailAndPassword(email, senha).catch(function(error) {
                        var i = 1;
                        console.log(error);
                    });
                    $("#formMotoboy").submit();

            }
               
               
           });
        }
            
             $('#insertMotoboy').on('click', function () {
            var nome = $('#nome').val();
            var cpf = $('#cpf').val();
            var telefone = $('#telefone').val();
            var placa = $('#placa').val();
            var email = $('#email').val();
            var senha = $('#senha').val();
            var empresaId = $('#empresaId').val();
            
           asyncU(nome,cpf,telefone,placa,email,senha,empresaId);
        });
        
        async function asyncU(nome,cpf,telefone,placa,email,senha,empresaId){
            insertAutoKey(nome, cpf, telefone, placa, email, senha,empresaId); 
        }
        
        
         </script>
    </body>
</html>