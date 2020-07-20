<?php
   
    include "{$_SERVER['DOCUMENT_ROOT']}/ProjectKvik/helpers/variaveis.php";
    include "{$_SERVER['DOCUMENT_ROOT']}/ProjectKvik/PDO/classes/ClassCrud.php";    

    $crud=new ClassCrud();

    if($Acao=="Editar"){
        $crud->updateDB(
                "users_idoso",
                "nome=?, sexo=?, anoNascimento=?, contato=?, cidade=?, bairro=?, categoria=?, ead=?",
                "idIdoso=?",
                array(
                    $Nome,
                    $Sexo,
                    $AnoNascimento,
                    $Contato,
                    $Cidade,
                    $Bairro,
                    $Categoria,
                    $Ead,
                    $Id_idoso
                )
            );
        echo 'Dados Alterados Success!';
    }