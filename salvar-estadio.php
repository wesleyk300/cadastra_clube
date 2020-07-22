<?php

				
				$sql = "SELECT * FROM clube ORDER BY id_time DESC LIMIT 1";
				
				$result = $conn->query($sql);
				
				if($result->num_rows > 0){
					
					while($row = $result->fetch_assoc()){
						
					$clube_id_time = $row["id_time"];

					
					}
							
					}
				
				
				
			
$nome_estadio= $_REQUEST ["nome_estadio"];
$endereco_estagio= $_REQUEST ["endereco_estadio"];
$capacidade= $_REQUEST ["capacidade"];
$inauguracao= $_REQUEST ["inauguracao"];

$sql = "INSERT INTO estadio (clube_id_time,nome_estadio,endereco_estadio,capacidade,inauguracao) 
VALUES ('{$clube_id_time}','{$nome_estadio}','{$endereco_estagio}','{$capacidade}','{$inauguracao}')";

$result = $conn->query($sql) or die ($conn->error);

if ($result==true){
	print "<div class='alert alert-success'>Cadastrou com sucesso!</div>";
}else{
	print "<div class='alert alert-danger'>Não foi possível cadastrar.</div>";
}


header("Location: novo-presidente.php")

?>