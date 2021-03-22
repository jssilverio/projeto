// colocar mascara formulário
$(document).ready(function () {
    $('#telefone').mask("(00) 00000-0000");
    $('#cpf').mask("000.000.000-00");
    $('#cep').mask("00000-000");
    $("#data_nasc").mask("99/99/9999");
});

// retirar mascara formulário
$("#form").submit(function() {
    $("#telefone").unmask();
    $("#cpf").unmask();
    $("#cep").unmask();
  });

//busca cep  
$("#cep").focusout(function(){
    $.ajax({
        url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
        dataType: 'json',
        success: function(resposta){
            $("#endereco").val(resposta.logradouro);
            $("#complemento").val(resposta.complemento);
            $("#bairro").val(resposta.bairro);
            $("#cidade").val(resposta.localidade);
            $("#uf").val(resposta.uf);
            $("#numero").focus();
        }
    });
});
    

