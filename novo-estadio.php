<!DOCTYPE html>
<html lang="pt-BR">
	<head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Cadastro Estádio</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body>
	<form action = "index.php?page=salvar-estadio" method="POST">		
		<div class="container">
			<div class="row">
				<div class="col-6">
					<div class="fonte_color">
						<center><h1>Estádio:</h1></center>
						<div class= "form-group">
							<label>Nome: </label>
							<input type="text" name="nome_estadio" class="form-control">
						</div>
						<div class= "form-group">
							<label>Endereço: </label>
							<input type="text" name="endereco_estadio" class="form-control">
						</div>
						<div class= "form-group">
							<label>Capacidade: </label>
							<input type="number" name="capacidade" class="form-control">
						</div>
						<div class= "form-group">
							<label>Inauguração: </label>
							<input type="date" name="inauguracao" class="form-control">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success "> Próximo </button>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</form>
	
	
		<script src="js/jquery-3.2.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
</body>
</html>
	
	
		