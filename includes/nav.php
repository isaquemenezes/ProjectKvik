<nav id="menu">
				<ul class="links">

					<li><a href="<?php echo DIRPAGE.'';?>">Home</a></li>		

					<?php 
						$verify = new \Classes\ClassSessions();
						$verify_session = $verify->verifyIdSessions();
						
						if(isset($_SESSION['login'])){
						
							echo "<li><a href='".DIRPAGEP."account'>Gerenciar Conta</a></li>";
							echo "<li><a href='".DIRPAGEP."cadastro-idoso'>Cadastrar Idoso</a></li>";
							echo "<li><a href='".DIRPAGE."controllers/controllerLogout'>Sair</a></li>";

						} else {
							echo "<li><a href='".DIRPAGEP."Login'>Login</a></li>";
						}
					?>

					
					

				</ul>
			</nav>



		