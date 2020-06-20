<?php
   
   include ("{$_SERVER['DOCUMENT_ROOT']}/PDO/includes/variaveis.php"); //Caminho Absoluto
   include ("{$_SERVER['DOCUMENT_ROOT']}/PDO/classes/ClassCrud.php");// Caminho Absoluto   

    $crud=new ClassCrud();

    if($Acao=="Cadastrar"){
        $crud->insertDB(
            "users",
            "?,?,?",
            array(
                $Id,
                $Nome,
                $Email,
                //$Contato,
                //$Titulo,
                //$Cidade,
                //$Bairro
            )

        );

    echo 'Success Cadastro!';
    }else{
        $crud->updateDB(
            "users",
            "nome=?,email=?",
            "id=?",
            array(
                $Nome,
                $Email,
                //$Contato,
                //$Titulo,
                //$Cidade,
                //$Bairro,
                $Id
            )
        );
        echo 'Dados Alterados Success!';
        
    }
    