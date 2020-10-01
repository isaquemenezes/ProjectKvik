
<section id='two' class='wrapper style3'>
				<div class='inner'>
					<header class='align-center'>




<?php
$verify=new \Classes\ClassSessions(); 

$verify->verifyIdSessions();


    if(isset($_SESSION['login'])){
        echo "<div style='width: 50%;  clear: none; margin: 0 3em 2em 25%;'>
                <p></p>   
                <h3>H3 vazio</h3>

                <form name='formCadastro' id='formCadastro' action='".DIRPAGE."controllers/controllerCadastroIdoso' method='post'>
                    <div class='row uniform'>
                        <input type='hidden' id='Acao' name='Acao'>
                        <input type='hidden' id='id' name='id'>
                        <input type='hidden' id='fk_users' name='fk_users'>

                        <div class='6u 12u$(xsmall)'>
                            <input type='text' id='nome' name='nome' placeholder='Nome ou apelido' required></div>
                        
                        
                    
                        <div class='12u$'>
                            <div class='select-wrapper'>
                                <select name='categoria' id='categoria'>
                                    <option  value=''>- Categoria -</option>
                                    <option style='background:black;' value='educacaofinanceira'>Educação Financeira</option>
                                    <option style='background:black;' value='educacaotecnologica'>Educação Tecnológica</option>
                                    <option style='background:black;' value='combateisolamento'>Combate Ao Isolamento</option>
                                    <option style='background:black;' value='Outros'>Outros</option>
                                </select>
                            </div>
                        </div>


                        
                        <div class='12u$'>
                            <div class='select-wrapper'>
                                <select name='sexo' id='sexo'>
                                    <option value=''>- Sexo -</option>
                                    <option style='background:black;' value='masculino'>Masculino</option>
                                    <option style='background:black;' value='feminino'>Feminino</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class='12u$'>
                            <div class='select-wrapper'>
                                <select name='on' id='on'>
                                    <option value=''>- Pode ser à distância -</option>
                                    <option style='background:black;'value='sim'>SIM</option>
                                    <option style='background:black;' value='nao'>NÂO</option>
                                </select>
                            </div>
                        </div>

                        
                        <div class='4u 12u$(small)'><label>Pode ser à distância?</label></div>
                        
                        <div class='4u 12u$(small)'>
                            <input type='radio' id='priority-normal' name='priority'>
                            <label for='priority-normal'>Não</label>
                        </div>
                        
                        <div class='4u$ 12u$(small)'>
                            <input type='radio' id='priority-high' name='priority'>
                            <label for='priority-high'>Sim</label>
                        </div>

                        <div class='6u 12u$(xsmall)'>
                            <input type='text' id='cidade' name='cidade' placeholder='Cidade' required></div>
                        
                        <div class='6u 12u$(xsmall)'>
                            <input type='text' id='bairro' name='bairro' placeholder='Bairro' required></div>
                            
                        <div class='6u 12u$(xsmall)'>
                            <input class='float w100 h40' type='text' id='anoNascimento' name='anoNascimento' placeholder='Ano de Nascimento 4dígitos (Opcional)'></div> 

                    
                        <div class='12u$'>
                            <textarea name='message' id='message' placeholder='Enter your message' rows='6'></textarea></div>
                        
                        
                        <div class='12u$'>
                        
                            <ul class='actions'>
                                <li><input type='submit' value='Cadastrar' /></li>
                                <li><input type='reset' value='Reset' class='alt' /></li>
                            </ul>
                        
                        </div>
                    </div>
                    
                </form>
                <h6>Lembre-se que você deve ser o responsável, ou ter autorização, para cadastrar a pessoa. Qualquer dúvida, leia nossos termos.</h6>
            </div>";

                    }
else
{/*
 echo "
<div style='width: 50%;  clear: none; margin: 0 3em 2em 25%;'>
<p></p>   
<h3>H3 vazio</h3>

<form method='post' name='formCadastro' id='formCadastro' action='".DIRPAGE."controllers/controllerCadastro'>
<div class='row uniform'>
        

        <div class='6u 12u$(xsmall)'>
        <input type='text' name='name' id='name' placeholder='Nome'/></div>
        
    <div class='6u$ 12u$(xsmall)'>
        <input type='email' name='email' id='email' placeholder='Email:' required></div>    
    
  
        <div class='6u 12u$(xsmall)'>
        <input type='password' id='senha' name='senha' placeholder='Senha:' required=''/></div>

    <div class='6u 12u$(xsmall)'>
        <input type='password' id='senhaConf' name='senhaConf' placeholder='Confirmação da Senha:' required=''/></div>
  
      

    
    
      
        <div class='12u$'>
        
            <ul class='actions'>
                <li><input type='submit' value='Cadastrar' /></li>
                <li><input type='reset' value='Reset' class='alt' /></li>
            </ul>
        
        </div>
    </div>
    
</form>
<h6>Lembre-se que você deve ser o responsável, ou ter autorização, para cadastrar a pessoa. Qualquer dúvida, leia nossos termos.</h6>
</div>";*/

echo "<div style='width: 50%;  margin: 3em 3em 0 25%;'>					
						<h2>Estamos reunindo um exército do bem.</h2>
						<div class='retornoCad'></div>
						
                            <h3>Cadastre-se e começe a fazer a diferença!</h3>
                            
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
                                            <li><input type='submit' value='junta-se'></li>
                                            
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
        </div>";





}?>








					</header>
				</div>
			</section>
