function validar() {
	var valorEmail = document.getElementById("email").value;
	var valorSenha = document.getElementById("senha").value;
	
	if(valorEmail.indexOf("@") > -1){
		return true;
	} else {
		alert("Insira um email válido e/ou uma senha com pelo menos 8 caracteres!!!");
		return false;
	}

	if(valorSenha.length > 7){
		return true
	} else {
		alert("Insira um email válido e/ou uma senha com pelo menos 8 caracteres!!!");
		return false
	}	
}