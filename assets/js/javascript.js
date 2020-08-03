//Retorno do root
function getRoot(){
    var root = "http://"+document.location.hostname+"/ProjectKvik/";
    return root;
}

//Ajax do formulário de cadastro
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
                //getCaptcha();
                $.each(response.erros,function(key,value){
                    $('.retornoCad').append(value+'');
                });
            }else{
                $('.retornoCad').append('Dados inseridos com sucesso!');
            }
        }
    });
});

//Ajax do formulário de cadastro Idoso
$("#formCadastro").on("submit",function(event){
    event.preventDefault();
    var dados=$(this).serialize();

    $.ajax({
       url: getRoot()+'controllers/controllerCadastroIdoso',
        type: 'post',
        dataType: 'json',
        data: dados,
        success: function (response) {
            $('.retornoCad').empty();
            if(response.retorno == 'erro'){
                //getCaptcha();
                $.each(response.erros,function(key,value){
                    $('.retornoCad').append(value+'');
                });
            }else{
                $('.retornoCad').append('Dados inseridos com sucesso!');
            }
        }
    });
});

//Ajax do formulário de login
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

//Ajax do formulário de confirmação de senha
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
                //getCaptcha();
                $('.retornoSen').empty();
                $.each(response.erros,function(key,value){
                    $('.retornoSen').append(value+'');
                });
            }
        }
    });
});

/* Confirmação de deletar de conta de usuário volunteer*/
$('.excluir').on('click', function(event){
    event.preventDefault(); //evita direcionamento automática para o link

    var link=$(this).attr('href');

    if(confirm("Confirmar a Exclusão dos Dados?")){ window.location.href=link; }
    else{  return false;  }   
});

/* Listagem dos usuários idosos do DB na page */
var qnt_result_pg = 5; //quantidades de Registros por páginas
var pagina = 1;  //page inícial

$(document).ready(function (){
   listar_user(pagina, qnt_result_pg); //Chama a funcao para exibir os dados
});

function listar_user(pagina, qnt_result_pg){
    var dados_page ={
        pagina: pagina,
        qnt_result_pg: qnt_result_pg
    }
    $.post('listaDB/lista_combate_isolamento', dados_page, function(retorna_lista){
        $("#conteudoListaDB").html(retorna_lista);

    });
}
