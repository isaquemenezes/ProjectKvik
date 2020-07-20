<?php
   
    include "{$_SERVER['DOCUMENT_ROOT']}/ProjectKvik/helpers/variaveis.php";
    include "{$_SERVER['DOCUMENT_ROOT']}/ProjectKvik/PDO/classes/ClassCrud.php";    

    $crud=new ClassCrud();

    if($Acao=="Cadastrar"){
        $crud->insertDB(
                    "users_idoso",
                    "?,?,?,?,?,?,?,?,?,?",
                    array(
                        $Id_idoso,
                        $Email,
                        $Nome,
                        $Sexo,
                        $Cidade,
                        $Bairro,
                        $Categoria,
                        $Ead,
                        $Contato,
                        $AnoNascimento                   
                                          
                    )
                );
        echo 'Cadastro Realizado com Successo!';
   }else{
        $crud->updateDB(
            "users_idoso",
            "nome=?, sexo=?, cidade=?, bairro=?, categoria=?,  ead=?, contato=?, anoNascimento=?",
            "idIdoso=?",
            array(
                $Nome,
                $Sexo,
                $Cidade,
                $Bairro,
                $Categoria,
                $Ead,
                $Contato,
                $AnoNascimento,
                $Id_idoso
            )
        );
    echo 'Dados Alterados Success!';
    
}
