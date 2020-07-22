<!DOCTYPE html>
<html lang="pt-BR">
	<head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Escola</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body background="bg1.jpg">
	<font color="#fffff"><center><h1>Gerenciamento De Clube</h1><br><br>

<a href="novo_registro.php" class="btn btn-success btn-lg active" role="button" aria-pressed="true"><span class="glyphicon glyphicon-plus"></span>   NOVO</a><br><br>
<a href="listar-clube.php" class="btn btn-warning btn-lg active" role="button" aria-pressed="true"><span class="glyphicon glyphicon-list-alt"></span>  Listar</a><br><br>
<a href="editar-clube.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"><span class="glyphicon glyphicon-edit"></span>  Editar</a><br><br>
<a href="#" class="btn btn-danger btn-lg active" role="button" aria-pressed="true"><span class="glyphicon glyphicon-remove"></span>  Excluir</a>

</center></font>

<br><br>







	


		
		
		
		
		
		
		
		<div class="container">
			<div class="row">
					<div class="col-lg-12">
					
			<?php
			include("config.php");
			switch (@$_REQUEST["page"]){
				case "novo_registro":
					include ("novo_registro.php");
				break;
				case "salvar-clube":
					include ("salvar-clube.php");
				break;
				case "novo-estadio":
					include ("novo-estadio.php");
				break;
				case "salvar-estadio":
					include ("salvar-estadio.php");
				break;
				break;
				case "listar-clube":
					include ("listar-clube.php");
				break;
				case "editar-clube":
					include ("editar-clube.php");
				break;
				case "editar-outros":
					include ("editar-outros.php");
				break;
				case "novo-presidente":
					include ("novo-presidente.php");
				break;
				case "salvar-presidente":
					include ("salvar-presidente.php");
				break;
				case "proximo":
					include ("proximo.php");
				break;
				case "editar-clube-editar":
					include ("editar-clube-editar.php");
				break;
				case "salvar-editar-deletar-clube":
					include ("salvar-editar-deletar-clube.php");
				break;
				case "novo-patrocinador":
					include ("novo-patrocinador.php");
				break;
				case "salvar-patrocinador":
					include ("salvar-patrocinador.php");
				break;
				case "novo-treinador":
					include ("novo-treinador.php");
				break;
				case "salvar-treinador":
					include ("salvar-treinador.php");
				break;
				case "salvar-jogador":
					include ("salvar-jogador.php");
				break;
				case "novo-jogador":
					include ("novo-jogador.php");
				break;
				case "listar-patrocinadores":
					include ("listar-patrocinadores.php");
				break;
				case "listar-jogadores":
					include ("listar-jogadores.php");
				break;
				case "editar-estadio-editar":
					include ("editar-estadio-editar.php");
				break;
				case "salvar-editar-deletar-estadio":
					include ("salvar-editar-deletar-estadio.php");
				break;
				case "editar-presidente-editar":
					include ("editar-presidente-editar.php");
				break;
				case "salvar-editar-deletar-presidente":
					include ("salvar-editar-deletar-presidente.php");
				break;
				
				
			}
			?>
			
			
			
		
		</div>
		</div>
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<script src="js/jquery-3.2.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>