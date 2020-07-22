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

	$sql = "SELECT * FROM jogadores WHERE clube_id_time = ".$_REQUEST["id_time"];
	
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
		print "<th>Idade</th>";
		print "<th>Data de nascimento</th>";
		print "<th>CPF</th>";
		print "<th>RG</th>";
		print "<th>Email</th>";
		print "<th>Nacionalidade</th>";
		print "<th>Ínicio do contrato </th>";
		print "<th>Fim do contrato</th>";
		print "<th>Salário</th>";

		
		print "</tr>";
		
		while($row = $result->fetch_assoc()){
			print "<tr>";
			print "<td>".$row["id_jogador"]."</td>";
			print "<td>".$row["nome_jogador"]."</td>";
			print "<td>".$row["idade_jogador"]."</td>";
			print "<td>".$row["data_nasc_jogador"]."</td>";
			print "<td>".$row["cpf_jogador"]."</td>";
			print "<td>".$row["rg_jogador"]."</td>";
			print "<td>".$row["email_jogador"]."</td>";
			print "<td>".$row["nacionalidade_jogador"]."</td>";
			print "<td>".$row["inicio_dat_contrat"]."</td>";
			print "<td>".$row["fim_dat_contrat"]."</td>";
			print "<td>".$row["salario_jogador"]."</td>"; 
		
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

