
var pessoas =[
	{
		nome:"Alexandre",
		usuario: "alexandre@gmail.com",
		senha: "123"
	},
	{
		nome:"Thiago",
		usuario: "thiago@gmail.com",
		senha: "456"
	},
	{
		nome:"Matheus",
		usuario: "matheus@gmail.com",
		senha: "789"
	},
	{
		nome:"Natan",
		usuario: "natan@gmail.com",
		senha: "101"
	}
]

function validar(form){

   
	const email = form.email.value;

	const senha = form.senha.value;


	for(i= 0 ;i<pessoas.length; i++){
		if(email == pessoas[i].usuario && senha == pessoas[i].senha){
			alert("Bem Vindo" + " "+pessoas[i].nome)
		}break
		
	}
	for(i= 0 ;i<pessoas.length; i++){
		if(email != pessoas[i].usuario ){
			alert("Usuario Incorreto")
		}break
		
	}
	for(i= 0 ;i<pessoas.length; i++){
		if(senha != pessoas[i].senha ){
			alert("Senha Incorreta")
		}break
		
	}
	



	
	
	
	
	  
	

	

	

    
	

}