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
	<form action = "index.php?page=salvar-jogador" method="POST">		
		<div class="container">
			<div class="row">
				<div class="col-6">
					<div class="fonte_color">
						<center><h1>Jogador:</h1></center>
						<div class= "form-group">
							<label>Nome: </label>
							<input type="text" name="nome_jogador" class="form-control">
						</div>
						<div class= "form-group">
							<label>Idade: </label>
							<input type="number" name="idade_jogador" class="form-control">
						</div>
						<div class= "form-group">
							<label>Data de nascimento: </label>
							<input type="date" name="data_nasc_jogador" class="form-control">
						</div>
						<div class= "form-group">
							<label>CPF: </label>
							<input type="text" name="cpf_jogador" class="form-control">
						</div>
						<div class= "form-group">
							<label>RG: </label>
							<input type="text" name="rg_jogador" class="form-control">
						</div>
						<div class= "form-group">
							<label>Email: </label>
							<input type="text" name="email_jogador" class="form-control">
						</div>
						<div class= "form-group">
							<label>Nacionalidade: </label>
							<input type="text" name="nacionalidade_jogador" class="form-control">
						</div>
						<div class= "form-group">
							<label>Data ínicio do contrato: </label>
							<input type="date" name="inicio_dat_contrat" class="form-control">
						</div>
						<div class= "form-group">
							<label>Data fim do contrato: </label>
							<input type="date" name="fim_dat_contrat" class="form-control">
						</div>
						<div class= "form-group">
							<label>Salario: </label>
							<input type="number" name="salario_jogador" class="form-control">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success "> Adicionar </button>
						</div>
						<div class="form-group">
							<a class="btn btn-success" href="index.php" role="button">Finalizar</a>
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