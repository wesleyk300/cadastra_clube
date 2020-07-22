<?php

include ('config.php');
$sql = mysql_query ("select * clube") or die ("Erro");
$linhas = mysql_num_rows($sql);
echo $linhas;
?>