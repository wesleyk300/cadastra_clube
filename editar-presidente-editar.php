<!DOCTYPE html>
<html lang="pt-BR">
	<head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Cadastro Clube</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	</head>
	<body>
	
<?php
	include("config.php");
	
	$sql = "SELECT * FROM presidente WHERE id_presidente = ".$_REQUEST["id_presidente"];
	
	$result = $conn->query($sql) or die($conn->error);
	
	if($result==true){
		$row = $result->fetch_assoc();
?>
	
<form action = "index.php?page=salvar-editar-deletar-presidente&acao=editar&id_presidente=<?php print $row["id_presidente"];  ?>" method="POST">
		
		<div class="container">
			<div class="row">
				<div class="col-6">
					<div class="fonte_color">
						<center><h1>Presidente:</h1></center>
						<div class= "form-group">
							<label>Nome: </label>
							<input type="text" name="nome_presidente" class="form-control" value="<?php print $row["nome_presidente"]; ?>">
						</div>
						<div class= "form-group">
							<label>idade: </label>
							<input type="number" name="idade_presidente" class="form-control" value="<?php print $row["idade_presidente"]; ?>">
						</div>
						<div class= "form-group">
							<label>Data de nascimento: </label>
							<input type="date" name="data_nasc_presidente" class="form-control" value="<?php print $row["data_contrato_presidente"]; ?>">
						</div>
						<div class= "form-group">
							<label>CPF: </label>
							<input type="text" name="cpf_presidente" class="form-control" value="<?php print $row["cpf_presidente"]; ?>">
						</div>
						<div class= "form-group">
							<label>RG: </label>
							<input type="text" name="rg_presidente" class="form-control" value="<?php print $row["rg_presidente"]; ?>">
						</div>
						<div class= "form-group">
							<label>E-mail: </label>
							<input type="text" name="email_presidente" class="form-control" value="<?php print $row["email_presidente"]; ?>">
						</div>
						<div class= "form-group">
							<label>Nacionalidade: </label>
							<input type="text" name="nacionalidade_presidente" class="form-control" value="<?php print $row["nacionalidade_presidente"]; ?>">
						</div>
						<div class= "form-group">
							<label>Data contrato: </label>
							<input type="date" name="data_contrato_presid" class="form-control" value="<?php print $row["data_contrato_presid"]; ?>">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success "> Salvar </button>
						</div>
					</div>
			</div>
		</div>
	</div>		
</form>
<?php
	} //fim do if
?>
	
	
		<script src="js/jquery-3.2.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>