<?php

				
				$sql = "SELECT * FROM clube ORDER BY id_time DESC LIMIT 1";
				
				$result = $conn->query($sql);
				
				if($result->num_rows > 0){
					
					while($row = $result->fetch_assoc()){
						
					$clube_id_time = $row["id_time"];

					
					}
							
					}
				
				
				
			
$nome_patrocinador= $_REQUEST ["nome_patrocinador"];
$valor_contrato= $_REQUEST ["valor_contrato"];
$data_contrato= $_REQUEST ["data_contrato"];


$sql = "INSERT INTO patrocinador (clube_id_time,nome_patrocinador,valor_contrato,data_contrato) 
VALUES ('{$clube_id_time}','{$nome_patrocinador}','{$valor_contrato}','{$data_contrato}')";

$result = $conn->query($sql) or die ($conn->error);

if ($result==true){
	print "<div class='alert alert-success'>Cadastrou com sucesso!</div>";
}else{
	print "<div class='alert alert-danger'>Não foi possível cadastrar.</div>";
}


header("Location: novo-patrocinador.php")

?>