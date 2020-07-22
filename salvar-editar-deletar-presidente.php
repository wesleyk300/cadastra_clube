<?php
	$nome_presidente= $_REQUEST ["nome_presidente"];
	$idade_presidente = $_REQUEST ["idade_presidente"];
	$data_nasc_presidente= $_REQUEST ["data_nasc_presidente"];
	$cpf_presidente= $_REQUEST ["cpf_presidente"];
	$rg_presidente= $_REQUEST ["rg_presidente"];
	$email_presidente= $_REQUEST ["email_presidente"];
	$nacionalidade_presidente= $_REQUEST ["nacionalidade_presidente"];
	$data_contrato_presid= $_REQUEST ["data_contrato_presid"];
	
		switch($_REQUEST["acao"]){
			
		case "editar":
			$sql = "UPDATE presidente SET nome_presidente='{$nome_presidente}', idade_presidente='{$idade_presidente}', data_nasc_presidente='{$data_nasc_presidente}', cpf_presidente='{$cpf_presidente}',rg_presidente='{$rg_presidente}',email_presidente='{$email_presidente}',nacionalidade_presidente='{$nacionalidade_presidente}',data_contrato_presid='{$data_contrato_presid}' WHERE id_presidente=".$_REQUEST["id_presidente"];
			
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