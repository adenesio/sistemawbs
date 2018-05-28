<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"> </meta>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="Estilo.css" />
		<title> Calculadora II </title>
	</head>
	<body>
		<form  method="GET" action="calorlatente.php">
			<div class="form-group">
				<label for="calor-latente">Quantidade de Calor Latente (QL)</label>
				<input type="number" name="calor-latente" id="calor-latente"  class="form-control" placeholder="Digite a quantidade de calor Latente" />
			</div>
			<div class="form-group">					
				<label for="massa">Quantidade de massa(m)</label>
				<input type="number" name="massa" class="form-control" id="massa" placeholder="Digite a quantidade de massa"/>
			</div>
			<div class="form-group">	
				<label for="calor-latente-do-material">Quantidade de Calor Latente do Material (L)</label>
				<input type="number" name="calor-latente-do-material" id="calor-latente-do-material" class="form-control" placeholder="Digite a quantidade de calor Específico" />
			</div>
			<input type="submit" name="btn-enviar" class="btn btn-primary"  id="btn-enviar" value="Calcular">
		</form>
	</body>


</html>