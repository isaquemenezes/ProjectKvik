<?php
    namespace Models;

    $crud=new ModelCrud();

    if($Acao=="Editar"){

        $crud->updateDB("users","nome=?, contato=?, cidade=?, bairro=?" , "id=?",
                    array($Nome, $Contato, $Cidade,  $Bairro, $Id ));
                    
        echo"<script>
                alert('Dados alterados com sucesso!');
                window.location.href='".DIRPAGEP."account#marker1';
            </script>";    
            
    }else{

        echo"<script>
                alert('Erro!');
                window.location.href='".DIRPAGEP."account#marker1';
            </script>";

    }