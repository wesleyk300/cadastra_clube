<?php

				
				$sql = "SELECT * FROM clube ORDER BY id_time DESC LIMIT 1";
				
				$result = $conn->query($sql);
				
				if($result->num_rows > 0){
					
					while($row = $result->fetch_assoc()){
						
					$clube_id_time = $row["id_time"];
					}
							
					}
				
				
				
			
$nome_presidente= $_REQUEST ["nome_presidente"];
$idade_presidente = $_REQUEST ["idade_presidente"];
$data_nasc_presidente= $_REQUEST ["data_nasc_presidente"];
$cpf_presidente= $_REQUEST ["cpf_presidente"];
$rg_presidente= $_REQUEST ["rg_presidente"];
$email_presidente= $_REQUEST ["email_presidente"];
$nacionalidade_presidente= $_REQUEST ["nacionalidade_presidente"];
$data_contrato_presid= $_REQUEST ["data_contrato_presid"];



$sql = "INSERT INTO presidente (clube_id_time,nome_presidente,idade_presidente,data_nasc_presidente,cpf_presidente,rg_presidente,email_presidente,nacionalidade_presidente,data_contrato_presid) 
VALUES ('{$clube_id_time}','{$nome_presidente}','{$idade_presidente}','{$data_nasc_presidente}','{$cpf_presidente}','{$rg_presidente}','{$email_presidente}','{$nacionalidade_presidente}','{$data_contrato_presid}')";

$result = $conn->query($sql) or die ($conn->error);

if ($result==true){
	print "<div class='alert alert-success'>Cadastrou com sucesso!</div>";
}else{
	print "<div class='alert alert-danger'>Não foi possível cadastrar.</div>";
}

header("Location: novo-patrocinador.php")

?>