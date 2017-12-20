<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

</head>

<body>
<script language="javascript" type="text/javascript">
function conectado(){
	setTimeout("window.location='../index.html'",5000);
}

function falhou(){
	setTimeout("window.location='../index.html'",5000);
}


</script>
<?php
require("conexao.php");
		
	$login = $_POST["login_index"];
	$senha = $_POST["senha_index"];
	$sql = mysql_query("SELECT * FROM cadastro WHERE login_cad = '$login' and senha_cad ='$senha'") or die (mysql_error());
	$row = mysql_num_rows($sql);
	if($row > 0){
		session_start();
		$_SESSION['login_index']=$POST['login_index'];
		$_SESSION['senha_index']=$POST['senha_index'];
		echo "<center>Você foi autenticado com sucesso!<br> Bem vindo: $login<br> Aguarde um instante você será redirecionado.</center>";
		echo "<script>conectado()</script>";
		
		}else{
			echo "<center>Nome de usuário ou senha invalidos! Aguarde um instante para tentar novamente.</center>";	
			echo "<script>falhou()</script>";
		}
?>

</body>
</html>