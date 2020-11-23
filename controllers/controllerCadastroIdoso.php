<?php
    namespace Models;

    $crud=new ModelCrud();
  
    #Cadastro de Pessoa Atendida
    if($Acao=="Cadastrar")
    {
        $crud->insertDB("users_idoso", "?,?,?,?,?,?,?,?,?,?",
                  array(0, 
                        $Fk_users, 
                        $Nome, 
                        $Sexo, 
                        $AnoNascimento, 
                        $Cidade, 
                        $Bairro, 
                        $Categoria, 
                        $Aa, 
                        $dataCreated
                  )
                );
              
        
            echo "<script>
                    alert('Deu Certo! :-)');
                    window.location.href='".DIRPAGE."myaccount#marker2';
                  </script>
                ";    
              
              //echo $Id." \n".$Fk_users." \n".$Nome." \n".$Sexo." \n".$AnoNascimento ."\n".$Cidade."\n".$Bairro."\n".$Categoria."\n".$Aa."\n".$dataCreated;
              //var_dump($crud);    
    } 
    #Update de Pessoa Atendida
    else{
       
        $crud->updateDB("users_idoso", "nome=?, sexo=?, anoNascimento=?, cidade=?, bairro=?, categoria=?, Aa=?","id=?",
                  array($Nome, 
                        $Sexo, 
                        $AnoNascimento, 
                        $Cidade, 
                        $Bairro,
                        $Categoria, 
                        $Aa,
                        $Id
                  )
                );

                echo "<script>
                        alert('Dados atualizados com sucesso!');
                        window.location.href='".DIRPAGE."myaccount#marker2';
                      </script>
                ";          
                         
    
    }