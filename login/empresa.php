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


   

<style>
h1,h2,h3,h4,h5,h6 {font-family: "Century Gothic", sans-serif;}
body, html {
    height: 70%;
    color: #777;    
}

.login-form{
    margin: 100px auto;
    width: 600px; 
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
			<form action="inserir_empresa.php" method="post">		
					<div class="w3-row-padding" style="margin:0 -16px 8px -16px">
					
					<h4> Para prosseguirmos, preencha os dados respectivos de sua empresa.</h4><hr>
					
							<div class="w3-row-padding" style="margin:0 50px 8px 50px">
								<label for="nome">CNPJ</label>
								<input type="text" class="form-control" id="cnpj" placeholder="Digite o CNPJ da empresa" name="empresa[cnpj]"  maxlength="14" required>
							</div>
							
							<div class="w3-row-padding" style="margin:0 50px 8px 50px">
								<label for="nome">Razão Social</label>
								<input type="text" class="form-control" id="razaosocial" placeholder="Digite a razão social" name="empresa[razaoSocial]" required>
							</div>
							
							<div class="w3-row-padding" style="margin:0 50px 8px 50px">
								<label for="nome">Nome Fantasia</label>
								<input type="text" class="form-control" id="nomefantasma" placeholder="Digite o nome fantasma" name="empresa[nomeFantasia]" required>
							</div>
							
							<div class="w3-row-padding" style="margin:0 50px 8px 50px">
								<label for="nome">Inscrição Estadual</label>
								<input type="text" class="form-control" id="inscestadual" placeholder="Digite a inscrição estadual" name="empresa[inscEstadual]" maxlength="11" required>
							</div>
							
							<div class="w3-row-padding" style="margin:0 50px 8px 50px">
								<label for="nome">Telefone</label>
								<input type="text" class="form-control" maxlength="11"  id="telefone" placeholder="Digite o telefone empresarial" name="empresa[telefone]" required>
							</div>
							
							<div class="w3-row-padding" style="margin:0 50px 8px 50px">
								<label for="nome">Email</label>
								<input type="email" class="form-control" id="email" placeholder="Digite o email empresarial" name="empresa[email]" required>
							</div>
							
							<div class="w3-row-padding" style="margin:0 50px 8px 50px">
								<label for="nome">Data de Criação</label>
								<input type="date" class="form-control" id="data"  name="empresa[data]" required>
							</div>
							
							<br><hr><div class="w3-row-padding" style="margin:0 50px 8px 50px">
								<label for="nome">Cep</label>
								<input type="text" class="form-control"  maxlength="8" id="cep" placeholder="Digite o CEP" name="empresa[cep]" required>
							</div>
							
							<div class="w3-row-padding" style="margin:0 50px 8px 50px">
								<label for="nome">Complemento</label>
								<input type="text" class="form-control" id="logadouro" placeholder="Digite o complemento" name="empresa[comp]" required>
							</div>
							
							<div class="w3-row-padding" style="margin:0 50px 8px 50px">
								<label for="numero">Numero</label>
								<input type="text" class="form-control" id="numero" placeholder="Digite o numero" name="empresa[num]" required>
							</div>
							
							<div class="w3-row-padding" style="margin:0 50px 8px 50px">
								<label for="nome">Bairro</label>
								<input type="text" class="form-control" id="bairro" placeholder="Digite o bairro" name="empresa[bairro]" readonly="readonly" required>
							</div>
							
					
							
							<div class="w3-row-padding" style="margin:0 50px 8px 50px">
								<label for="uf">Estado</label>
		<select id="uf" name="empresa[uf]" class="form-control" required readonly="readonly">
			<option value="AC">Acre</option>
			<option value="AL">Alagoas</option>
			<option value="AP">Amapá</option>
			<option value="AM">Amazonas</option>
			<option value="BA">Bahia</option>
			<option value="CE">Ceará</option>
			<option value="DF">Distrito Federal</option>
			<option value="ES">Espírito Santo</option>
			<option value="GO">Goiás</option>
			<option value="MA">Maranhão</option>
			<option value="MT">Mato Grosso</option>
			<option value="MS">Mato Grosso do Sul</option>
			<option value="MG">Minas Gerais</option>
			<option value="PA">Pará</option>
			<option value="PB">Paraíba</option>
			<option value="PR">Paraná</option>
			<option value="PE">Pernambuco</option>
			<option value="PI">Piauí</option>
			<option value="RJ">Rio de Janeiro</option>
			<option value="RN">Rio Grande do Norte</option>
			<option value="RS">Rio Grande do Sul</option>
			<option value="RO">Rondônia</option>
			<option value="RR">Roraima</option>
			<option value="SC">Santa Catarina</option>
			<option value="SP">São Paulo</option>
			<option value="SE">Sergipe</option>
			<option value="TO">Tocantins</option>
		</select>
							</div>
							
							<div class="w3-row-padding" style="margin:0 50px 8px 50px">
								<label for="nome">Cidade</label>
								<input type="text" class="form-control" id="cidade" placeholder="Digite a cidade" name="empresa[cidade]" readonly="readonly" required>
							</div>

							
					</div>
						<div class='button-entrar' style="margin:0 50px 8px 50px">
							<input class='btn btn-warning form-control' type='submit' value="Cadastrar"></input>				   
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


 
<script type="text/javascript">

	$("#cep").focusout(function(){
		//Início do Comando AJAX
		$.ajax({
			//O campo URL diz o caminho de onde virá os dados
			//É importante concatenar o valor digitado no CEP
			url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
			//Aqui você deve preencher o tipo de dados que será lido,
			//no caso, estamos lendo JSON.
			dataType: 'json',
			//SUCESS é referente a função que será executada caso
			//ele consiga ler a fonte de dados com sucesso.
			//O parâmetro dentro da função se refere ao nome da variável
			//que você vai dar para ler esse objeto.
			success: function(resposta){
				//Agora basta definir os valores que você deseja preencher
				//automaticamente nos campos acima.
				$("#logradouro").val(resposta.logradouro);
				$("#bairro").val(resposta.bairro);
				$("#cidade").val(resposta.localidade);
				$("#uf").val(resposta.uf);
				//Vamos incluir para que o Número seja focado automaticamente
				//melhorando a experiência do usuário
				$("#numero").focus();
			}
		});
	});
</script>
</html>