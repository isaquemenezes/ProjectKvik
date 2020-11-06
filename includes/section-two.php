<?php namespace Models; ?>


<?php
       

        
       $id_users=$_SESSION["id_users"];
       
       //Update de Dados do DB users_idoso
       if(isset($_GET['id'])){  
           $id_users2=$_GET['id'];
           $Acao="Editar";
   
           $crud=new ModelCrud();
           $select_idoso=$crud->selectDB("*","users_idoso", "WHERE id=?", array($id_users2));
           $idosos=$select_idoso->fetch(\PDO::FETCH_ASSOC);
           
           $id           =$idosos['id'];
           $fk_users     =$idosos['fk_users'];
           $nome         =$idosos['nome'];
           $sexo         =$idosos['sexo'];
           $cidade       =$idosos['cidade'];        
           $bairro       =$idosos['bairro'];
           $categoria    =$idosos['categoria'];  
           $Aa          =$idosos['Aa'];
           $anoNascimento=$idosos['anoNascimento'];
       }
       #Cadastro Novo
       else{ 
           $Acao="Cadastrar";
   
           $id=0;
           $fk_users=$id_users;        
           $nome="";
           $email="";
           $sexo="";
           $anoNascimento="";
           $cidade="";
           $bairro="";
           $categoria="";
           $Aa="";
       }
      
   
    if(!empty($_SESSION['login'])){
        echo " ";

    }else{
        echo "
        

        <section id='two' class='wrapper style3'>
        <div class='inner'>
            <header class='align-center'>

        
        <div style='width: 50%;  margin: 3em 3em 0 25%;'>					
            <h2>Estamos reunindo um exército do bem.</h2>
                <div class='retornoCad'></div>
                            
                <h3>Cadastre-se e começe a fazer a diferença!</h3>
                <br> <br>   
                                
                <form method='post' name='formCadastro' id='formCadastro' action='".DIRPAGE."controllers/controllerCadastro'>
                    <div class='row uniform'>
                        <div class='6u 12u$(xsmall)'>
                            <input type='text' name='name' id='name' placeholder='Nome'/></div>
                                            
                        <div class='6u$ 12u$(xsmall)'>
                            <input type='email' name='email' id='email' placeholder='Email:' required></div>    
                                        
                        <div class='6u 12u$(xsmall)'>
                            <input type='password' id='senha' name='senha' placeholder='Senha:' required></div>

                        <div class='6u 12u$(xsmall)'>
                            <input type='password' id='senhaConf' name='senhaConf' placeholder='Confirmação da Senha:' required></div>
                        <p><p>
        
                        <div class='12u$'>                                    
                            <ul class='actions'>
                                <li><input type='submit' value='enviar'></li>
                                                
                                <li><a 
                                    style ='background-color: transparent;
                                            box-shadow: inset 0 0 0 2px rgba(255, 255, 255, 0.25);
                                            color: #ffffff !important; border-radius: 2px;
                                            border: 0;
                                            cursor: pointer;
                                            display: inline-block;
                                            font-weight: 300;
                                            height: 2.85rem;
                                            line-height: 2.95rem;
                                            padding: 0 1.5rem;
                                            text-align: center;
                                            text-decoration: none;
                                            text-transform: uppercase;
                                            white-space: nowrap;'
                                            href='".DIRPAGE."login'>Entrar</a></li>
                            </ul>                                     
                        </div> 

                    </div>
                </form>
                 <br><br>
          </div>";

    
    
    }
?>








					</header>
				</div>
			</section>
