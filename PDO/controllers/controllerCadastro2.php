<?php
   
   include ("{$_SERVER['DOCUMENT_ROOT']}/ProjectKvik/helpers/variaveis.php"); //Caminho Absoluto
   include ("{$_SERVER['DOCUMENT_ROOT']}/PDO/classes/ClassCrud.php");// Caminho Absoluto   

    $crud=new ClassCrud();

    if($Acao=="Cadastrar"){
        $crud->insertDB(
            "users",
            "?,?,?,?,?,?",
            array(
                $Id,
                $Nome,
                $Email,
                $Contato,
                $Cidade,
                $Bairro
            )

        );

    echo 'Success Cadastro!';
    }else{
        $crud->updateDB(
            "users",
            "nome=?,email=?, contato=?, cidade=?, bairro=?",
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
    