<?php
   namespace Models;

   include_once "./helpers/variaveis.php"; 

    $crud=new ModelCrud();

    if($Acao=="Editar"){
        $crud->updateDB("users", "nome=?, email=?, contato=?, cidade=?, bairro=?", "id=?",
                            array($Nome,  $Email,  $Contato,  $Cidade,  $Bairro,    $Id)
        );
        header("location:".DIRPAGE."minha-conta");
    }