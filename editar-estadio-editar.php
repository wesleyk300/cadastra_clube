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
	
	$sql = "SELECT * FROM estadio WHERE id_estadio = ".$_REQUEST["id_estadio"];
	
	$result = $conn->query($sql) or die($conn->error);
	
	if($result==true){
		$row = $result->fetch_assoc();
?>
	
<form action = "index.php?page=salvar-editar-deletar-estadio&acao=editar&id_estadio=<?php print $row["id_estadio"];  ?>" method="POST">
		
		<div class="container">
			<div class="row">
				<div class="col-6">
					<div class="fonte_color">
						<center><h1>Estádio:</h1></center>
						<div class= "form-group">
							<label>Nome: </label>
							<input type="text" name="nome_estadio" class="form-control" value="<?php print $row["nome_estadio"]; ?>">
						</div>
						<div class= "form-group">
							<label>Endereço: </label>
							<input type="text" name="endereco_estadio" class="form-control" value="<?php print $row["endereco_estadio"]; ?>">
						</div>
						<div class= "form-group">
							<label>Capacidade: </label>
							<input type="number" name="capacidade" class="form-control" value="<?php print $row["capacidade"]; ?>">
						</div>
						<div class= "form-group">
							<label>Inauguração: </label>
							<input type="date" name="inauguracao" class="form-control" value="<?php print $row["inauguracao"]; ?>">
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