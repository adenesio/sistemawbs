<!DOCTYPE html>
	<head>
		<meta charset="utf-8"> </meta>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="Estilo.css" />
		<title> Calculadora </title>
	</head>
	<body>
	<center>
		<div class="container">
			<h1>Formula para descobrir a Quantidade de Calor Específico</h1>
			<p> Calor sensível é aquele que provoca apenas uma variação de temperatura dos corpos,
				diferenciando-se do calor latente, que muda a estrutura física dos mesmos.</p>
			<p>	O calor específico determina a 
				quantidade de calor que uma unidade de massa precisa perder ou ganhar para que aconteça uma redução ou elevação</p>
			<p>	de uma unidade de temperatura sem,
				contudo, alterar sua estrutura.</p>
			<p>	Assim, se o corpo é sólido, continua sólido, se é líquido continua líquido 
			e, se é gasoso, continua gasoso. </p>
			<button name="btn-cadastro" id="btn-cadastro" class="btn btn-block  btn-login" data-toggle="modal" data-target="#formCadastro">Cadastre-se</button>
		</div>
		<div id="formCadastro" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">×</button>
						<h1 class="modal-title">Calcule</h1>
					</div>
					<form  method="GET" action="calorsensivel.php">
						<div class="modal-body">
							<div class="form-group">
								<label for="calorSensivel">Quantidade de Calor Sensível (Q)</label>
								<input type="number" name="calorSensivel"  class="form-control"
							placeholder="Digite a quantidade de calor sensível"/>
							</div>
							<div class="form-group">
								<label for="massa">Quantidade de massa(m)</label>
								<input type="number" name="massa" class="form-control" 
							placeholder="Digite a quantidade de massa"/>
							</div>
							<div class="form-group">
								<label for="calorEspecifico">Quantidade de Calor Específico (c)</label>
								<input type="number" name="calorEspecifico"  class="form-control"
							placeholder="Digite a quantidade de calor Específico" />
							</div>
							<div class="form-group">
								<label for="temperaturaFinal">Temperatura Final(Tf)</label>
								<input type="number" name="temperaturaFinal"  class="form-control"
							placeholder="Digite a Temperatura Final" />
							</div>
							<div class="form-group">
								<label for="temperaturaInicial">Temperatura Inicial(TI)</label>
								<input type="number" name="temperaturaInicial"  class="form-control"
								placeholder="Digite a Temperatura Inicial" />
							</div>
						</div>
						<div class="modal-footer">
							<input type="submit" name="btn-enviar" class="btn btn-primary"  id="btn-enviar" value="Calcular">
						</div>
					</form>
				</div>
			</div>
		</div>
		<script src="js/jquery-3.2.1.min.js"> </script>
		<script src="bootstrap/js/bootstrap.min.js"> </script>
	</body>
</html>