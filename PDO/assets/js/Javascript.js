$("#formCadastro").on('submit', function(event){
    event.preventDefault();
    var Dados =$(this).serialize();

    $.ajax({
        url: 'controllers/controllerCadastro2.php',
        type:'post',
        dataType: 'html',
        data: Dados,
        success:function(Dados){
            $('.resultado').show().html(Dados);                        
        }

    })
});

/* Confirmação de deletar */
$('.excluir').on('click', function(event){
    event.preventDefault();

    var link=$(this).attr('href');

    if(confirm("Confirmar a Exclusão dos Dados?")){
        window.location.href=link;
    }else{
        return false;
    }
    
    
    
})