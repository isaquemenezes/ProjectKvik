<?php
    namespace Models;

    include_once "./helpers/variables.php"; 

    $crud=new ModelCrud();

    if($Acao=="Editar"){
        $crud->updateDB("users","nome=?, contato=?, cidade=?, bairro=?", "id=?",
                    array($Nome, $Contato, $Cidade,  $Bairro, $Id ));
        echo"<script>
                alert('Dados alterados com sucesso!');
                window.location.href='".DIRPAGE."myaccount';
            </script>";    
    }else{

    }