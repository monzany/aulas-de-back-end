function tratasaida(nome){
    
    var Nome = document.getElementById('nome').value;
    console.log(Nome);
   
    var tamanho =Nome.length;
    console.log(tamanho);
    
    var Senha = document.getElementById('senha').value;
    
    var tamanhoo =Senha.length;
    console.log(Senha);
   
    var Confirma = document.getElementById('confirma').value;
    console.log(Confirma);
    
    var email = document.getElementById('email').value;
    console.log(email);
    
    if(!isset(Senha)|| Senha == null || Senha == "" ){
    alert("Digite uma senha valida");
   
}if(!isset(email)|| email == null || email ==""){
        alert("O email é obrigatorio");
        document.getElementById('email').focus();
    }
   
 if( Tamanho2 < 0 || Tamanho > 16 ){
        alert("A senha deve conter letras maiúsculas, minúsculas, números e caracteres especiais,tamanho mínimo de 8 e máximo de 16 caracteres.");
    }
if(Senha != Confirma){
        alert("Preencha esse campo corretamente");
    }
 if (Nome == null || Nome == "" ) {
        alert("Preencha o campo nome corretamente");
        document.getElementById('nome').focus();
 }else{
        alert("Campo preenchido corretamente");
    }
    };