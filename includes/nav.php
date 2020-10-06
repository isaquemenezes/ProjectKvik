<nav id="menu">
				<ul class="links">
					<li><a href="<?php echo DIRPAGE.'';?>">Home</a></li>
					
					<?php
						$verify=new \Classes\ClassSessions();
						$verify->verifyIdSessions();
						if(isset($_SESSION['login']))
						{	
							echo "<li><a href='javascript:void(0);' onclick='MoveScroll(&#39;two&#39;)' id='tv2'>Cadastrar Idoso</a></li>";			
							echo "<li><a href='".DIRPAGE."myaccount' id='gConta'>Gerenciar Conta</a></li>";
							echo "<li><a href='".DIRPAGE."ajuda'>Ajuda</a></li>";
 							echo "<li><a href='".DIRPAGE."controllers/controllerLogout'>Sair</a></li>";
						}
						else{
							echo "<li><a href='javascript:void(0);' onclick='MoveScroll(&#39;two&#39;)' id='tv2'>Junta-se</a></li>";
							
							echo "<li><a href='".DIRPAGE."login'>Entrar</a></li>";	
							echo "<li><a href='".DIRPAGE."cadastro-idoso'>Cadastrar Idoso</a></li>";
							echo "<li><a href='".DIRPAGE."ajuda'>Ajuda</a></li>";			

						}
					?>		

				</ul>
			</nav>



		