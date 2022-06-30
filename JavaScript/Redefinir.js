function validarEmail(form){

    const email = form.redefinir.value;
   
    if(email == ""){
		alert("Não esqueça de Digita seu Email")
	};

  emails = ["alexandre@gmail.com","thiago@gmail.com","matheus@gmail.com","natan@gmail.com"];

  if(emails.includes(email)){
    alert("Email Enviado")
    window.location = "redefinirii.html"
  }
  else{
    alert("Email não cadastrado")
  }
  

  


} 