$(document).ready(function(){

    $("#linkImoveis").click(function(){
        $("#imóveis").toggle();
    });

    $("#linkFuncionarios").click(function(){
        $("#funcionarios").toggle();
    });

    $("#linkClientes").click(function(){
        $("#clientes").toggle();
    });
});

function login() {

    var usuario = prompt("Usuário:");
    if (usuario == null || usuario == ""){
        alert("O usuário deve ser informado");
        return false;
    }
    var senha = prompt("Senha:");
    if (senha == null || senha == ""){
        alert("A senha deve ser informada");
        return false;
    }

    return true;

}