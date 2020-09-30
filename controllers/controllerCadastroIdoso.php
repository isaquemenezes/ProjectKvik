<?php
    namespace Models;
    
    include_once "./helpers/variables.php";  

    $crud=new ModelCrud();

    #Input data de Criacao 
    date_default_timezone_set('America/Sao_Paulo');
    $DataCreated=date("Y-m-d H:i:s", time());

    #Cadastro de Pessoa Atendida
    if($Acao=="Cadastrar"){
        $crud->insertDB("users_idoso", "?,?,?,?,?,?,?,?,?,?",
                array(0, $Fk_users, $Nome, $Sexo, $AnoNascimento, $Cidade, $Bairro, $Categoria, $On, $DataCreated));
            header("location:".DIRPAGE."myaccount");
    }
    #Update de Pessoa Atendida
    else{
        $crud->updateDB("users_idoso", "nome=?, sexo=?, anoNascimento=?, cidade=?, bairro=?, categoria=?, ead=?","id=?",
                array($Nome, $Sexo, $AnoNascimento, $Cidade, $Bairro, $Categoria, $On, $id));
        header("location:".DIRPAGE."myaccount");
    
    }