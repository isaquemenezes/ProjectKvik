<?php
    include '../includes/variaveis.php';
    include '../classes/ClassCrud.php';    

    $crud=new ClassCrud();

    if($Acao=="Cadastrar"){
        $crud->insertDB(
            "cad",
            "?,?,?,?,?,?,?",
            array(
                $id_idoso,
                $Nome,
                $AnoNascimento,
                $Sexo,
                $Cidade,
                $Bairro,
                $Radio
            )

        );

    echo 'Success Cadastro!';
   }else{
        $crud->updateDB(
            "cad",
            "nome=?, anoNascimento=?, sexo=?, cidade=?, bairro=? ead=?",
            "id=?",
            array(
                $Nome,
                $AnoNascimento,
                $Sexo,
                $Cidade,
                $Bairro,
                $Radio,
                $id_idoso
            )
        );
        echo 'Dados Alterados Success!';
        
    }