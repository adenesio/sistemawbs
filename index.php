<?php
	require_once('controller/LoginController.class.php');
	$controlador = new LoginController();
	$mensagem="";
	if(isset($_POST['btn-logar'])){
		$mensagem = $controlador->logar($_POST);
	}
	if(isset($_POST['btn-cadastro'])){
		$controlador->salvarUsuario($_POST);
	}
?>
<!DOCTYPE html>

<html>
	<head>
		<title>	WBS| Login</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/estilo.css" />
	</head>
	
	<body id="body-login">
		<div class="container">
			<div class="form-centralizado">
				<form method="POST">
					<div class="form-group">
						<label class="meu-label" for="login">Login</label>
						<input type="text" name="login" id="login" placeholder="Digite o seu login" class="form-control" />
					</div>
					<div class="form-group">
						<label class="meu-label" for="senha">Senha</label>
						<input type="password" name="senha" id="senha" placeholder="Digite a sua senha" class="form-control"/>
					</div>
					<input type="submit" name="btn-logar" id="btn-logar" value="Logar" 
					class="btn btn-block btn-login">
				</form>
				<button name="btn-cadastro" id="btn-cadastro" class="btn btn-block  btn-login" data-toggle="modal" data-target="#formCadastro">Cadastre-se</button>
			</div>
		</div>
		<div id="formCadastro" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- Modal conteúdo-->
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title">Cadastre-se</h1>
						<button type="button" class="close" data-dismiss="modal">×</button>
						
					</div>
					<form method="POST" >
						<div class="modal-body">
							<label>Nome:</label>
							<p>
							<input type="text" name="" placeholder="Digite seu Nome">
							<p>
							<label>Sobrenome:</label> 
							<p>
							<input type="	text" name="" placeholder="Digite seu Sobrenome">
							<p>
							<label>idade:</label><p>
							<input type="caracter" name="" placeholder="Digite sua Idade ">
							<p>
							<label>Sexo:</label>
							<P>
							<input type="radio" name="Sexo" value="Mascolino">Homem
							<input type="radio" name="Sexo" value="Feminino">Mulher
							<input type="radio" name="Sexo" value="Indefinido">Indefinido
						
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
							<button type="submit"  class="btn btn-danger" data-dismiss="modal" name="btn-cadastro">Enviar</button>
						</div>
					</form>
				</div>
				
			</div>
		</div>
		<?=$mensagem?>
		<script src="js/jquery-3.2.1.min.js"> </script>
		<script src="bootstrap/js/bootstrap.min.js"> </script>
	</body>
</html>