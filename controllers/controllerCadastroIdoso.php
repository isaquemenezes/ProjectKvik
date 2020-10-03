<?php
    namespace Models;
    
    include_once "./helpers/variables.php";  

    $crud=new ModelCrud();
    //$id_idoso=filter_input(INPUT_GET, "id_idoso", FILTER_SANITIZE_SPECIAL_CHARS);
    //$id_users=filter_input(INPUT_GET, "id", FILTER_SANITIZE_SPECIAL_CHARS);
    
    //$Fk_users=filter_input(INPUT_POST,'fk_users',FILTER_SANITIZE_SPECIAL_CHARS);                
    #Input data de Criacao 
    date_default_timezone_set('America/Sao_Paulo');
    $dataCreated=date("Y-m-d H:i:s", time());
   
    #Cadastro de Pessoa Atendida
    if($Acao=="Cadastrar"){
 
    
        $crud->insertDB("users_idoso", "?,?,?,?,?,?,?,?,?,?",
                array($Id, $Fk_users, $Nome, $Sexo, $AnoNascimento, $Cidade, $Bairro, $Categoria, $On, $dataCreated));
                           
            var_dump($Id, $Fk_users, $Nome, $Sexo, $AnoNascimento, $Cidade, $Bairro, $Categoria, $Ead, $dataCreated);
           
                //header("location:".DIRPAGE."myaccount");
   } 
    #Update de Pessoa Atendida
    else{
        $crud->updateDB("users_idoso", "nome=?, sexo=?, anoNascimento=?, cidade=?, bairro=?, categoria=?, ead=?","id=?",
                array($Nome, $Sexo, $AnoNascimento, $Cidade, $Bairro, $Categoria, $On, $Id));
        header("location:".DIRPAGE."myaccount");
    
    }