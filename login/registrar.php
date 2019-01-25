<!DOCTYPE html>
<html lang="pt_BR" class="htmlsystem">
<head>
<title>Motogen EMPRESA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="shortcut icon" href="img/motogen.ico" />

</head>
<body>
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Century Gothic", sans-serif;}
body, html {
    height: 70%;
    color: #777;    
}

.login-form{
    margin: 100px auto;
    width: 450px; 
} 
.login-form section.box{
    background: #fff;
    width: 100%;
    height: auto;
    box-shadow: 0 0 10px #323232;
    display: block;
    z-index: 100;
    text-align: center;
    padding: 40px 10px 20px 10px;
    border-top: 2px solid orange; 
}


.login-form section #logo {
    text-align: center;
    width: 80px;
    position: absolute;
    top: 50px;
    left: 50%;
    margin-left: -30px;
}
}
</style>
	<div class="login-form">
		<section>
		  <img src="img/logo.png" id='logo'> 
		</section>
		<section class='box'>
		  <h1> Motogen EMPRESA</h1><hr>
			<form action="inserir_usuario.php" method="post">		
					<div class="w3-row-padding" style="margin:0 -16px 8px -16px">
							<div class="w3-row-padding" style="margin:0 50px 8px 50px">
								<label for="nome">Nome Completo:</label>
								<input type="text" class="form-control" id="nome" placeholder="Digite o seu nome completo" name="usuario[nome]" required>
							</div>
							<div class="w3-row-padding" style="margin:0 50px 8px 50px">
								<label for="email">Email:</label>
								<input type="text" class="form-control" id="email" placeholder="Digite o seu email" name="usuario[email]" required>
							</div>										
							<div class="w3-row-padding" style="margin:0 50px 8px 50px">
								<label for="senha">Senha:</label>
								<input type="password" class="form-control" id="senha" placeholder="Digite a sua senha" name="usuario[senha]" required>
							</div>
							
							<div class="form-group login-group-checkbox">
								<input type="checkbox" class="" id="reg_agree" name="reg_agree" required>
								<label for="reg_agree"><a href="#">Eu concordo com os termos</a></label>
							</div>
					</div>
						<div class='button-entrar' style="margin:0 50px 8px 50px">
							<input class='btn btn-warning form-control' type='submit' value="Entrar"></input>				   
						</div>
			<div class="etc-login-form">
						<p>Já tem uma conta? <a href="logar.php">Entre aqui</a></p>
					</div>
			</form>
		  
		</section>
	</div>
			

<div class='fundo' style='
    background: url(img/fundo.jpg) no-repeat;
    background-size: cover;
    background-position: center;
    content: "";
    position: fixed;
    top:0;
    left: 0;
    right: 0;
    z-index: -1;
    display: block;
    width: 1920px;
    height: 1080px;
    '>
</div>

<div style='text-align: center;'>
  <br><br><h1><img src="img/moto.png" id='logo2'></h1>
  <p style='color:#000;'> Copyrights © 2018 | <b>Safe Value</b>. Todos os direitos reservados a este site da Web. Este site da web é de propriedade da empresa Safe Value.</p>
</div>

</body>
</html>