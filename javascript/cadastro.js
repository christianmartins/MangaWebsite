function mascad(){
	
	if(document.cadastro.nome_cad.value==""||
	document.cadastro.nome_cad.value.length < 8)
	{	alert("Preencha o campo NOME com seu nome completo!");
		 document.cadastro.nome_cad.focus();
		 return false;
	}
	
	
	else if(document.cadastro.email_cad.value=="" ||
	document.cadastro.email_cad.value.indexOf('@')==-1 ||
	document.cadastro.email_cad.value.indexOf('.')==-1 )
	{
		alert("Email inválido! Preencha o campo Email corretamente!");
		document.cadastro.email_cad.focus();
		return false;
	}
	
	else if(document.cadastro.login_cad.value.length < 4)
	{
		alert("O LOGIN deve conter no mínimo 4 caracteres! Preencha o campo LOGIN corretamente!");
		document.cadastro.login_cad.focus();
		return false;
	}
	
	else if(document.cadastro.senha_cad.value.length < 4 )
	{
		alert("A SENHA deve conter no mínimo 4 caracteres! Preencha o campo SENHA corretamente!");
		document.cadastro.senha_cad.focus();
		return false;
	}
	
	else{
		return true;
	}
	}
