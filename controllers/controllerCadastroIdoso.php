<?php
    namespace Models;
    
    include_once "./helpers/variaveis.php";  

    $crud=new ModelCrud();

    #Input data de Criacao 
    date_default_timezone_set('America/Sao_Paulo');
    $DataCreated=date("Y-m-d H:i:s", time());

    #Cadastro de Pessoa Atendida
    if($Acao=="Cadastrar"){
        $crud->insertDB("users_idoso", "?,?,?,?,?,?,?,?,?,?,?",
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
                        $Ead,
                        $DataCreated                                
                    )
                );
            header("location:".DIRPAGE."minha-conta");
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
        header("location:".DIRPAGE."minha-conta");
    
    }