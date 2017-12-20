<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?
	require("conexao.php");
		
		$nome_cad = $_POST["nome_cad"];
		$email_cad = $_POST["email_cad"];
		$login_cad = $_POST["login_cad"];
		$senha_cad = $_POST["senha_cad"];
			
	
	$sql = mysql_query("SELECT * FROM cadastro WHERE login_cad = '$login_cad'") or die (mysql_error());
	$row = mysql_num_rows($sql);
	
	if($row < 1 ){	
	$sqlinsert = "INSERT INTO cadastro(nome_cad,email_cad,login_cad,senha_cad)
	VALUES('$nome_cad','$email_cad','$login_cad','$senha_cad')";
	
	mysql_query($sqlinsert) or die ("Não foi possivel inserir");
	
	echo "<script>alert('Cadastro feito com sucesso: $login_cad'); history.back();</script>";
		
		}else{
			echo "<script>alert('Nome de usuário: $login_cad já existe!'); history.back();</script>";
		}

?>
<br>

</body>
</html>