<!DOCTYPE html>
<html lang="pt-BR">
	<head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Lista de Clubes</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
	<br><br>
<div class="fonte_color">
<?php
include("config.php");

	$sql = "SELECT * FROM patrocinador WHERE clube_id_time = ".$_REQUEST["id_time"];
	
	$result = $conn->query($sql) or die($conn->error);
	
	$qtd = $result->num_rows;
	
	
	if($qtd > 0){
		print "<div class='container'>";
		print "<div class='row'>";
		print "<div class='col-10'";
		print "<p><b>$qtd</b> patrocinios cadastrados(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>Código</th>";
		print "<th>Nome</th>";
		print "<th>Valor</th>";
		print "<th>Data contrato</th>";
		print "</tr>";
		
		while($row = $result->fetch_assoc()){
			print "<tr>";
			print "<td>".$row["id_patrocinador"]."</td>";
			print "<td>".$row["nome_patrocinador"]."</td>";
			print "<td>".$row["valor_contrato"]."</td>";
			print "<td>".$row["data_contrato"]."</td>";
			  
		
			print "</tr>";
		}
		print "</table>";
		print "
						<a class='btn btn-warning active' href='listar-clube.php' role='button'>Voltar</a>
				  ";	
		print "</div>";
		print "</div>";
		print "</div>";
	}else{
		print "Não encontrou resultados";
	}
?>
</div>	
	
		<script src="js/jquery-3.2.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>

