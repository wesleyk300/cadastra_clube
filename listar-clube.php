﻿<!DOCTYPE html>
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

	$sql = "SELECT * FROM clube JOIN estadio ON clube.id_time = estadio.clube_id_time 
								JOIN presidente ON estadio.clube_id_time = presidente.clube_id_time
								JOIN treinador ON presidente.clube_id_time = treinador.clube_id_time		
	ORDER BY nome_time";	
	
	$result = $conn->query($sql) or die($conn->error);
	
	$qtd = $result->num_rows;
	
	
	if($qtd > 0){
		print "<div class='container'>";
		print "<div class='row'>";
		print "<div class='col-10'";
		print "<p><b>$qtd</b> clubes cadastrados(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>Código</th>";
		print "<th>Nome do Clube</th>";
		print "<th>Estádio</th>";
		print "<th>Presidente</th>";
		print "<th>Treinador</th>";
		print "<th>Patrocinadores</th>";
		print "<th>Jogadores</th>";
		print "</tr>";
		
		while($row = $result->fetch_assoc()){
			print "<tr>";
			print "<td>".$row["id_time"]."</td>";
			print "<td>".$row["nome_time"]."</td>";
			print "<td>".$row["nome_estadio"]."</td>";
			print "<td>".$row["nome_presidente"]."</td>";
			print "<td>".$row["nome_treinador"]."</td>";
			print "<td>
						<button class='btn btn-warning active'><i class='fa fa-edit' onclick=\"location.href='listar-patrocinadores.php?page=listar-patrocinadores&id_time=".$row["id_time"]."'\"></i>Listar</button>
				  </td>";
			print "<td>
						<button class='btn btn-warning active'><i class='fa fa-edit' onclick=\"location.href='listar-jogadores.php?page=listar-jogadores&id_time=".$row["id_time"]."'\"></i>Listar</button>
				  </td>";	  
		print "</tr>";
			
		}
		print "</table>";
			print "
						<a class='btn btn-warning active' href='index.php' role='button'>Voltar</a>
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

