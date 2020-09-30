<?php
   namespace Models;

   include_once "./helpers/variables.php"; 

    $crud=new ModelCrud();

    if($Acao=="Editar"){
        $crud->updateDB("users_idoso", "nome=?, email=?, contato=?, cidade=?, bairro=?", "id=?",
                            array($Nome,  $Email,  $Contato,  $Cidade,  $Bairro,    $id)
        );
        header("location:".DIRPAGE."myacccount");
    }