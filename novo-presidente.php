<!DOCTYPE html>
<html lang="pt-BR">
	<head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Cadastro Presidente</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	</head>
	<body>
	
<form action = "index.php?page=salvar-presidente" method="POST">
		
		<div class="container">
			<div class="row">
				<div class="col-6">
					<div class="fonte_color">
						<center><h1>Presidente:</h1></center>
						<div class= "form-group">
							<label>Nome: </label>
							<input type="text" name="nome_presidente" class="form-control">
						</div>
						<div class= "form-group">
							<label>idade: </label>
							<input type="number" name="idade_presidente" class="form-control">
						</div>
						<div class= "form-group">
							<label>Data de nascimento: </label>
							<input type="date" name="data_nasc_presidente" class="form-control">
						</div>
						<div class= "form-group">
							<label>CPF: </label>
							<input type="text" name="cpf_presidente" class="form-control">
						</div>
						<div class= "form-group">
							<label>RG: </label>
							<input type="text" name="rg_presidente" class="form-control">
						</div>
						<div class= "form-group">
							<label>E-mail: </label>
							<input type="text" name="email_presidente" class="form-control">
						</div>
						<div class= "form-group">
							<label>Nacionalidade: </label>
							<input type="text" name="nacionalidade_presidente" class="form-control">
						</div>
						<div class= "form-group">
							<label>Data contrato: </label>
							<input type="date" name="data_contrato_presid" class="form-control">
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