//Retorno do root
function getRoot(){
    var root = "http://"+document.location.hostname+"/ProjectKvik/";
    return root;
}

//Ajax do formulario de cadastro users
$("#formCadastro").on("submit",function(event){
    event.preventDefault();
    var dados=$(this).serialize();

    $.ajax({
       url: getRoot()+'controllers/controllerCadastro',
        type: 'post',
        dataType: 'json',
        data: dados,
        success: function (response) {
            $('.retornoCad').empty();
            if(response.retorno == 'erro'){
                $.each(response.erros,function(key,value){
                    $('.retornoCad').append(value+'');
                });
            }else{
                $('.retornoCad').append('Sucesso! Bem vindo. Você agora é parte do nosso time.<br>'
                 +'Ah! Não esqueçe de confirmar seu email, através do link que enviamos. Blz.');
            }
        }
    });
});


//Ajax do formulario de login
$("#formLogin").on("submit",function(event){
    event.preventDefault();
    var dados=$(this).serialize();

    $.ajax({
       url: getRoot()+'controllers/controllerLogin',
        type: 'post',
        dataType: 'json',
        data: dados,
        success: function (response) {
            if(response.retorno == 'success'){
                window.location.href=response.page;
            }else{
                //getCaptacha();
                if(response.tentativas == true){
                    $('.loginFormFormulario').hide();
                }
                $('.resultadoForm').empty();
                $.each(response.erros, function(key, value){
                    $('.resultadoForm').append(value+'<br>');
                });
            }
        }
    });
});

//CapsLock
$("#senha").keypress(function(e){
    kc=e.keyCode?e.keyCode:e.which;
    sk=e.shiftKey?e.shiftKey:((kc==16)?true:false);
    if(((kc>=65 && kc<=90) && !sk)||(kc>=97 && kc<=122)&&sk){ $(".resultadoForm").html("Caps Lock Ligado");  }
    else{    $(".resultadoForm").empty();  }
});

//CapsLock Para redefinição senha
$("#formRedSenha").keypress(function(e){
    kc=e.keyCode?e.keyCode:e.which;
    sk=e.shiftKey?e.shiftKey:((kc==16)?true:false);
    if(((kc>=65 && kc<=90) && !sk)||(kc>=97 && kc<=122)&&sk){ $(".retornoRedSenha").html("Caps Lock Ligado");  }
    else{    $(".retornoRedSenha").empty();  }
});


//Ajax do formulario de confirmacão de senha
$("#formSenha").on("submit",function(event){
    event.preventDefault();
    var dados=$(this).serialize();

    $.ajax({
        url: getRoot()+'controllers/controllerSenha',
        type: 'post',
        dataType: 'json',
        data: dados,
        success: function (response) {
            if(response.retorno == 'success'){$('.retornoSen').html("Redefinição de senha enviada com sucesso!");}
            else{
                $('.retornoSen').empty();
                $.each(response.erros,function(key,value){
                    $('.retornoSen').append(value+'');
                });
            }
        }
    });
});

/* Confirmacao de deletar de conta de usuario volunteer*/
$('.excluir-conta').on('click', function(event){
    event.preventDefault(); 

    var link=$(this).attr('href');

    if(confirm("Confirmar a Exclusão da Conta?")){ window.location.href=link; }
    else{  return false;  }   
});


/* Confirmação de deletar de conta de usuário volunteer*/
$('.excluir').on('click', function(event){
    event.preventDefault(); 

    var link=$(this).attr('href');

    if(confirm("Confirmar a Exclusão dos Dados?")){ window.location.href=link; }
    else{  return false;  }   
});


