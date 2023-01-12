function mostrarSenha(){
    var senha = document.getElementById('senhaId');

    if(senha.type == "password"){
        senha.type="text";
    }else{
        senha.type= "password";
    }


}

