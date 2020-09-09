<?php
    namespace Models;
    
    include_once "./helpers/variaveis.php";  

    $crud=new ModelCrud();

    #Input data de Criacao 
    date_default_timezone_set('America/Sao_Paulo');
    $DataCreated=date("Y-m-d H:i:s", time());

    #Cadastro de Pessoa Atendida
    if($Acao=="Cadastrar"){
        $crud->insertDB("idosos", "?,?,?,?,?,?,?,?,?,?",
                array($Id_idoso, $Fk_users, $Nome, $Sexo, $AnoNascimento, $Cidade, $Bairro, $Categoria, $Ead, $DataCreated));
            header("location:".DIRPAGE."minha-conta");
    }
    #Update de Pessoa Atendida
    else{
        $crud->updateDB("idosos", "nome=?, sexo=?, anoNascimento=?, cidade=?, bairro=?, categoria=?, ead=?","id=?",
                array($Nome, $Sexo, $AnoNascimento, $Cidade, $Bairro, $Categoria, $Ead, $Id_idoso));
        header("location:".DIRPAGE."minha-conta");
    
    }