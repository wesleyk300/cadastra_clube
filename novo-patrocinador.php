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
	<form action = "index.php?page=salvar-patrocinador" method="POST">		
		<div class="container">
			<div class="row">
				<div class="col-6">
					<div class="fonte_color">
						<center><h1>Patrocinador:</h1></center>
						<div class= "form-group">
							<label>Nome: </label>
							<input type="text" name="nome_patrocinador" class="form-control">
						</div>
						<div class= "form-group">
							<label>Valor contrato: </label>
							<input type="number" name="valor_contrato" class="form-control">
						</div>
						<div class= "form-group">
							<label>Data contrato: </label>
							<input type="date" name="data_contrato" class="form-control">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success "> Adicionar </button>
						</div>
						<div class="form-group">
							<a class="btn btn-success" href="novo-treinador.php" role="button">Próximo</a>
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
	
	
		