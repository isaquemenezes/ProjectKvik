<?php
    namespace Models;

    $crud=new ModelCrud();
    $validate=new \Classes\ClassValidate();
  
    #Cadastro de Pessoa Atendida
    
    if($Acao=="Cadastrar")
    {
       
      $validate->validateFields(array($Fk_users, $Nome, $Sexo, $AnoNascimento, $Cidade, $Bairro, $Categoria, $Aa));
      echo $validate->validateFinalCadIdoso($array_idoso); 

      echo "<script>
            alert('Cadastro efetuado com sucesso! :-)');
            window.location.href='".DIRPAGEP."account';
          </script>
      ";
    } 
    #Update de Pessoa Atendida
    else{
       
        $crud->updateDB("users_idoso", 
                        "nome=?, sexo=?, anoNascimento=?, cidade=?, bairro=?, categoria=?, Aa=?","id=?",
                  array( $Nome, $Sexo, $AnoNascimento, $Cidade, $Bairro, $Categoria, $Aa, $Id)
                );

                echo "<script>
                        alert('Dados atualizados com sucesso!');
                        window.location.href='".DIRPAGEP."account';
                      </script>
                ";          
                         
    
    }