<?php
	$nome_clube = $_REQUEST ["nome_clube"];
	$mascote = $_REQUEST ["mascote"];
	$fundacao_data = $_REQUEST ["fundacao_data"];
	
		switch($_REQUEST["acao"]){
			
		case "editar":
			$sql = "UPDATE clube SET nome_time='{$nome_clube}', mascote='{$mascote}', fundacao_data='{$fundacao_data}' WHERE id_time=".$_REQUEST["id_time"];
			
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