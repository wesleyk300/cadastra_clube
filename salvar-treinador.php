<?php

				
				$sql = "SELECT * FROM clube ORDER BY id_time DESC LIMIT 1";
				
				$result = $conn->query($sql);
				
				if($result->num_rows > 0){
					
					while($row = $result->fetch_assoc()){
						
					$clube_id_time = $row["id_time"];

					
					}
							
					}
				
				
				
			
$nome_treinador= $_REQUEST ["nome_treinador"];
$idade_treinador= $_REQUEST ["idade_treinador"];
$data_nasc_treinador= $_REQUEST ["data_nasc_treinador"];
$cpf_treinador= $_REQUEST ["cpf_treinador"];
$rg_treinador= $_REQUEST ["rg_treinador"];
$email_treinador= $_REQUEST ["email_treinador"];
$nacionalidade_treinador= $_REQUEST ["nacionalidade_treinador"];
$inicio_dat_contrat_trein= $_REQUEST ["inicio_dat_contrat_trein"];
$fim_dat_contrat_trein= $_REQUEST ["fim_dat_contrat_trein"];
$salario_treinador= $_REQUEST ["salario_treinador"];



$sql = "INSERT INTO treinador (clube_id_time,nome_treinador,idade_treinador,data_nasc_treinador,cpf_treinador,rg_treinador,email_treinador,nacionalidade_treinador,inicio_dat_contrat_trein,fim_dat_contrat_trein,salario_treinador) 
VALUES ('{$clube_id_time}','{$nome_treinador}','{$idade_treinador}','{$data_nasc_treinador}','{$cpf_treinador}','{$rg_treinador}','{$email_treinador}','{$nacionalidade_treinador}','{$inicio_dat_contrat_trein}','{$fim_dat_contrat_trein}','{$salario_treinador}')";

$result = $conn->query($sql) or die ($conn->error);

if ($result==true){
	print "<div class='alert alert-success'>Cadastrou com sucesso!</div>";
}else{
	print "<div class='alert alert-danger'>Não foi possível cadastrar.</div>";
}
header("Location: novo-jogador.php")
?>