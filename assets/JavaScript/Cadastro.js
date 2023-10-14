// definir que as areas do cpf,telefone sejam apenas numeros, é que
//confirmar se o senhas são iguais
// nome materno e nome sejam apenas letras e endereço tbm

//Verificação de Prenchimento
function verificar(form){

    const nomeComp = form.nome.value;
    const cpf = form.cpf.value;
    const nomeMate = form.nomematerno.value;
    const endereço = form.endereco.value;
    const telefix = form.fixo.value;
    const telecell = form.celular.value;
    const email = form.email.value;
    const senha1 = form.senha.value;
    const senha2 = form.confirme.value;

    let cadastro =0

    if(nomeComp == '' || nomeComp.length < 6){
        alert("O Nome Precisa de no Minimo de 6 letras")
        
    }else{
        cadastro = cadastro+1

    }
    if(cpf == '' || cpf.length < 11){
        alert("O CPF Precisa de no minimo de 11 Números")
    }else{
        cadastro = cadastro+1

    }
    if(nomeMate == '' || nomeMate.length < 6){
        alert("O Nome Materno Precisa de no minimo de 6 letras")
    }else{
        cadastro = cadastro+1

    }
    if(endereço == '' || endereço.length < 6){
        alert("O Endereço Precisa de no minimo de 6 letras")
    }else{
        cadastro = cadastro+1

    }
    if(telefix == '' || telefix.length < 10){
        alert("O Numero de Telefone Precisa de no minimo de 8 Números")
    }else{
        cadastro = cadastro+1

    }
    if(telecell == '' || telecell.length < 11){
        alert("O Numero de Telefone Precisa de no minimo de 9 Números")
    }else{
        cadastro = cadastro+1

    }
    if(email == '' || email.length < 11){
        alert("O Numero de Telefone Precisa de no minimo de 11 letras")
    }else{
        cadastro = cadastro+1

    }
    if(senha1 == '' || senha1.length < 8){
        alert("A senha precisa de no minimo 8 caracteres")
    }
    if(senha2 == '' || senha2.length < 8){
        alert("A senhas precisam ser iguais")
    }
    if(senha1==senha2)
    cadastro = cadastro + 1
    if(cadastro<8){
        alert("volte")
    }else{
        alert("Email de confirmação enviado, Bem Vindo"+" "+nomeComp)
    }



};

// Formatação de Telefone Celular
function mascaraTele(telefone){

    const telefonef = telefone.value;
    const tele = telefonef.length === 10;

    let ajuste;
    if(tele){
        const parte1 = telefonef.slice(0,2);
        const parte2 = telefonef.slice(2,6);
        const parte3 = telefonef.slice(6,10);
        ajuste = `(${parte1}) ${parte2}-${parte3}`

    }else if(tele<10){
        alert("numero de Telefone errado")
        return
    }
    else if(tele.length>11){
        alert("O máximo de caracteres é 11. Por favor, entre de novo com o texto."); 
        return
    }

    telefone.value = ajuste;

};
function mascaraCell(telefone){

    const telefonef = telefone.value;
    const celular = telefonef.length === 11;

    let ajuste;
    

    if(celular){
        const parte1 = telefonef.slice(0,2);
        const parte2 = telefonef.slice(2,7);
        const parte3 = telefonef.slice(7,11);
        ajuste = `(${parte1}) ${parte2}-${parte3}`
        

    }else{
        alert("numero de celular errado")
        return
    }
    
    telefone.value = ajuste;

};
function tiraHifen(telefone) {
    const telefonef = telefone.value;
    const ajuste = telefonef.replace(/-/,'');

    telefone.value = ajuste;
};

// Formatação de Cpf 
function mascaraCpf(cpf){

    const cpff = cpf.value
    const Cpf = cpff.length === 11
    let forma;
    if(Cpf){
        const parte1 = cpff.slice(0,3);
        const parte2 = cpff.slice(3,6);
        const parte3 = cpff.slice(6,9);
        const parte4 = cpff.slice(9,11);
        forma = `${parte1}.${parte2}.${parte3}-${parte4}`
        
    }else{
        alert("Numero de Cpf Invalido");
        return
    }
    cpf.value = forma
};