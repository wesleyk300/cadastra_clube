<?php
$nome_estadio= $_REQUEST ["nome_estadio"];
$endereco_estadio= $_REQUEST ["endereco_estadio"];
$capacidade= $_REQUEST ["capacidade"];
$inauguracao= $_REQUEST ["inauguracao"];
	
		switch($_REQUEST["acao"]){
			
		case "editar":
			$sql = "UPDATE estadio SET nome_estadio='{$nome_estadio}', endereco_estadio='{$endereco_estadio}', capacidade='{$capacidade}', inauguracao='{$inauguracao}' WHERE id_estadio=".$_REQUEST["id_estadio"];
			
			$result = $conn->query($sql) or die($conn->error);
			
			if($result==true){
				print "<div class='alert alert-success'>Editou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível editar.</div>";
			}
		break;
		case "excluir":
			$sql = "DELETE FROM autor WHERE id_autor=".$_REQUEST["id_autor"];
			
			$result = $conn->query($sql) or die($conn->error);
			
			if($result==true){
				print "<div class='alert alert-success'>Excluiu com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível excluir.</div>";
			}
		break;
	}
?>