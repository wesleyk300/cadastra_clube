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
	
	$sql = "SELECT * FROM clube WHERE id_time = ".$_REQUEST["id_time"];
	
	$result = $conn->query($sql) or die($conn->error);
	
	if($result==true){
		$row = $result->fetch_assoc();
?>
	
<form action = "index.php?page=salvar-editar-deletar-clube&acao=editar&id_time=<?php print $row["id_time"];  ?>" method="POST">
		
		<div class="container">
			<div class="row">
				<div class="col-6">
					<div class="fonte_color">
						<center><h1>Clube:</h1></center>
						<div class= "form-group">
							<label>Nome: </label>
							<input type="text" name="nome_clube" class="form-control"value="<?php print $row["nome_time"]; ?>">
						</div>
						<div class= "form-group">
							<label>Mascote: </label>
							<input type="text" name="mascote" class="form-control" value="<?php print $row["mascote"]; ?>">
						</div>
						<div class= "form-group">
							<label>Data de Fundação: </label>
							<input type="date" name="fundacao_data" class="form-control"value="<?php print $row["fundacao_data"]; ?>">
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