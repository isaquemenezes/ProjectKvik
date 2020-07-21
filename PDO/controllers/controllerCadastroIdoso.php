<?php
   
    include "{$_SERVER['DOCUMENT_ROOT']}/ProjectKvik/helpers/variaveis.php";
    include "{$_SERVER['DOCUMENT_ROOT']}/ProjectKvik/PDO/classes/ClassCrud.php";    

    $crud=new ClassCrud();

    #Cadastro de Pessoa Atendida
    if($Acao=="Cadastrar"){
        $crud->insertDB(
                    "users_idoso",
                    "?,?,?,?,?,?,?,?,?,?",
                    array(
                        $Id_idoso,
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
        echo 'Successo Pelo controllerCadastroIdoso!';
   }
   #Update de Pessoa Atendida
   else{
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
    echo 'Dados Alterados Success! controllerCadastroIdoso!';
    
}