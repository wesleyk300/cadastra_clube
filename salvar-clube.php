<?php

$nome_clube = $_REQUEST ["nome_clube"];
$id_clube = $_REQUEST ["id_clube"];

$mascote = $_REQUEST ["mascote"];
$fundacao_data = $_REQUEST ["fundacao_data"];



$sql = "INSERT INTO clube (nome_time,id_time,mascote,fundacao_data) 
VALUES ('{$nome_clube}','{$id_clube}','{$mascote}','{$fundacao_data}')";

$result = $conn->query($sql) or die ($conn->error);

if ($result==true){
	print "<div class='alert alert-success'>Cadastrou com sucesso!</div>";
}else{
	print "<div class='alert alert-danger'>Não foi possível cadastrar.</div>";
}


header("Location: novo-estadio.php")



?>
