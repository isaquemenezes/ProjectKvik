<?php
   include "./helpers/variaveis.php"; 
   include "./models/ModelCrud.php";  

    $crud=new ModelCrud();

    if($Acao=="Editar"){
        $crud->updateDB(
            "users",
            "nome=?, email=?, contato=?, cidade=?, bairro=?",
            "id=?",
            array(
                $Nome,
                $Email,
                $Contato,
                $Cidade,
                $Bairro,
                $Id
            )
        );
        echo 'Dados Alterados Success!';
    }