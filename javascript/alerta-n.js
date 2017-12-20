// JavaScript Document
function enviardados(){
	
	if(document.news.nome_news.value==""||
	document.news.nome_news.value.length < 6)
	{	alert("Preencha o campo NOME corretamente!");
		 document.news.nome_news.focus();
		 return false;
	}
	else if(document.news.email_news.value=="" ||
	document.news.email_news.value.indexOf('@')==-1 ||
	document.news.email_news.value.indexOf('.')==-1 )
	{
		alert("Email inválido! Preencha o campo Email corretamente!");
		document.news.email_news.focus();
		return false;
	}
	else{
		alert("Ferramenta desabilitada por tempo indeterminado!");
		return true;
	}
}

