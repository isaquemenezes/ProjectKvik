<?php
      
   
    if(empty($_SESSION['email'])){
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

    }else{
        echo "";
       

    
    
    }
?>








					</header>
				</div>
			</section>
