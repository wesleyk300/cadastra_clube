<?php

				
				$sql = "SELECT * FROM clube ORDER BY id_time DESC LIMIT 1";
				
				$result = $conn->query($sql);
				
				if($result->num_rows > 0){
					
					while($row = $result->fetch_assoc()){
						
					$clube_id_time = $row["id_time"];

					
					}
							
					}
				
				
				
			
$nome_jogador= $_REQUEST ["nome_jogador"];
$idade_jogador= $_REQUEST ["idade_jogador"];
$data_nasc_jogador= $_REQUEST ["data_nasc_jogador"];
$cpf_jogador= $_REQUEST ["cpf_jogador"];
$rg_jogador= $_REQUEST ["rg_jogador"];
$email_jogador= $_REQUEST ["email_jogador"];
$nacionalidade_jogador= $_REQUEST ["nacionalidade_jogador"];
$salario_jogador= $_REQUEST ["salario_jogador"];
$inicio_dat_contrat= $_REQUEST ["inicio_dat_contrat"];
$fim_dat_contrat= $_REQUEST ["fim_dat_contrat"];



$sql = "INSERT INTO jogadores (clube_id_time,nome_jogador,idade_jogador,data_nasc_jogador,cpf_jogador,rg_jogador,email_jogador,nacionalidade_jogador,salario_jogador,inicio_dat_contrat,fim_dat_contrat) 
VALUES ('{$clube_id_time}','{$nome_jogador}','{$idade_jogador}','{$data_nasc_jogador}','{$cpf_jogador}','{$rg_jogador}','{$email_jogador}','{$nacionalidade_jogador}','{$salario_jogador}','{$inicio_dat_contrat}','{$fim_dat_contrat}')";

$result = $conn->query($sql) or die ($conn->error);

if ($result==true){
	print "<div class='alert alert-success'>Cadastrou com sucesso!</div>";
}else{
	print "<div class='alert alert-danger'>Não foi possível cadastrar.</div>";
}


header("Location: novo-jogador.php")

?>