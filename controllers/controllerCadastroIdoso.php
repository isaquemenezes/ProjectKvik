<?php
    namespace Models;

    $crud=new ModelCrud();
  
    #Cadastro de Pessoa Atendida
    if($Acao=="Cadastrar")
    {
        $crud->insertDB("users_idoso", "?,?,?,?,?,?,?,?,?,?",
                array($Id, $Fk_users, $Nome, $Sexo, $AnoNascimento, $Cidade, $Bairro, $Categoria, $Aa, $dataCreated));
            
            echo "<script>
                    alert('Deu Certo! -)');
                    window.location.href='".DIRPAGE."myaccount#marker2';
                  </script>
                ";    
            //header("location:".DIRPAGE."myaccount#marker2");
   } 
    #Update de Pessoa Atendida
    else{
        $crud->updateDB("users_idoso", "nome=?, sexo=?, anoNascimento=?, cidade=?, bairro=?, categoria=?, Aa=?","id=?",
                array($Nome, $Sexo, $AnoNascimento, $Cidade, $Bairro, $Categoria, $Aa, $Id));
       // header("location:".DIRPAGE."myaccount#marker2");
                    
    
    }