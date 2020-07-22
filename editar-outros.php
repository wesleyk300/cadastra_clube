<!DOCTYPE html>
<html lang="pt-BR">
	<head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>ddsgasg</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
	</head>
	<body background="bg1.jpg">
	<font color="#fffff">
	<div class="container">
			<div class="row">
			<div class="col-6">
	<h1>Lista:</h1>
	</div></div></div>
<?php
include("config.php");

	$id_time = $_REQUEST ["id_time"];

	$sql = "SELECT * FROM clube JOIN estadio ON clube.id_time = '{$id_time}' AND estadio.clube_id_time = '{$id_time}' 
								JOIN presidente ON estadio.clube_id_time = '{$id_time}' AND presidente.clube_id_time = '{$id_time}'
								JOIN treinador ON presidente.clube_id_time = '{$id_time}' AND treinador.clube_id_time ='{$id_time}'"; 
								
	
	$result = $conn->query($sql) or die($conn->error);
	
	$qtd = $result->num_rows;
	
	
	if($qtd > 0){
		print "<div class='container'>";
		print "<div class='row'>";
		print "<div class='col-6'";
		print "<p><b>$qtd</b> clubes cadastrados(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		
		
		while($row = $result->fetch_assoc()){
		print "<tr>";
		print "<td>Clube</td>";
		print "<td>".$row["nome_time"]."</td>";
		print "<td>
				<button class='btn btn-success'><i class='fa fa-edit' onclick=\"location.href='editar-clube-editar.php?page=editar-clube-editar&id_time=".$row["id_time"]."'\"></i></button>
			   </td>";
		print "</tr>";
		print "<tr>";
		print "<td>Estádio</td>";
		print "<td>".$row["nome_estadio"]."</td>";
		print "<td>
				<button class='btn btn-success'><i class='fa fa-edit' onclick=\"location.href='editar-estadio-editar.php?page=editar-estadio-editar&id_estadio=".$row["id_estadio"]."'\"></i></button>
			   </td>";
		print "</tr>";
		print "<tr>";
		print "<td>Presidente</td>";
		print "<td>".$row["nome_presidente"]."</td>";
		print "<td>
				<button class='btn btn-success'><i class='fa fa-edit' onclick=\"location.href='editar-presidente-editar.php?page=editar-presidente-editar&id_presidente=".$row["id_presidente"]."'\"></i></button>
			   </td>";
		print "</tr>";
		
		print "<tr>";
		print "<td>Treinador</td>";
		print "<td>".$row["nome_treinador"]."</td>";
		print "<td>
				<button class='btn btn-success'><i class='fa fa-edit' onclick=\"location.href='editar-outros.php?page=editar-outros&id_time=".$row["id_time"]."'\"></i></button>
			   </td>";
		print "</tr>";
		
		print "<tr>";
		print "<td>Patrocinadores</td>";
		print "<td>
				<button class='btn btn-warning active'><i class='fa fa-edit' onclick=\"location.href='listar-patrocinadores.php?page=listar-patrocinadores&id_time=".$row["id_time"]."'\"></i>Listar</button>
			   </td>";
		print "</tr>";
		
		print "<tr>";
		print "<td>Jogadores</td>";
		print "<td>
				<button class='btn btn-warning active'><i class='fa fa-edit' onclick=\"location.href='listar-patrocinadores.php?page=listar-patrocinadores&id_time=".$row["id_time"]."'\"></i>Listar</button>
			   </td>";
		print "</tr>";
		
		}
		print "</table>";
		print "</div>";
		print "</div>";
		print "</div>";
	}else{
		print "Não encontrou resultados";
	}
?>
</font>	
	
		<script src="js/jquery-3.2.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>