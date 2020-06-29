<?php
    include "{$_SERVER['DOCUMENT_ROOT']}/ProjectKvik/helpers/variaveis.php";
    include "{$_SERVER['DOCUMENT_ROOT']}/ProjectKvik/PDO/classes/ClassCrud.php";    

    $crud=new ClassCrud();

    if($Acao=="Cadastrar"){
        $crud->insertDB(
                    "cadastro",
                    "?,?,?,?,?,?,?,?,?,?",
                    array(
                        $id_idoso,
                        $Email,
                        $Nome,
                        $Sexo,
                        $AnoNascimento,
                        $Contato,
                        $Cidade,
                        $Bairro,
                        $Categoria,
                        $Ead                  
                    )
                );
        echo 'Cadastro Realizado com Successo!';
   }else{
        $crud->updateDB(
                    "cadastro",
                    "nome=?, sexo=?, anoNascimento=?, contato=?, cidade=?, bairro=?, categoria=?, ead=?",
                    "id=?",
                    array(
                        $Nome,
                        $Sexo,
                        $AnoNascimento,
                        $Contato,
                        $Cidade,
                        $Bairro,
                        $Categoria,
                        $Ead,
                        $id_idoso
                    )
                );
        echo 'Dados Alterados Success!';
    }