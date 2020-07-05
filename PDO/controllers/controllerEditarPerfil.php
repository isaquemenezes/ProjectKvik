<?php
   include ("{$_SERVER['DOCUMENT_ROOT']}/ProjectKvik/helpers/variaveis.php"); //Caminho Absoluto
   include ("{$_SERVER['DOCUMENT_ROOT']}/ProjectKvik/PDO/classes/ClassCrud.php");// Caminho Absoluto   

    $crud=new ClassCrud();

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