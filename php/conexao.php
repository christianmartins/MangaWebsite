<?php 

$hostname='mysql.hostinger.com.br';
$username='******';
$senha='*****';
$banco='u888559510_manga';
$db = @mysql_connect($hostname,$username,$senha) or die("Não foi possivel conectar ao servidor de dados!");
mysql_select_db($banco,$db) or die ("Banco de dados não localizado");

?>

