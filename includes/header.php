<header id="header" class="alt">

				<div class="logo"><a href="javascript:void(0);" onclick="MoveTop()">Kvik <span>Plataforma</span></a></div>
				
				<?php 
					 
					$verify = new \Classes\ClassSessions();
					$verify->verifyIdSessions();		

					if(empty($_SESSION['email']))
					{
						echo "<a href='#menu'>Menu</a>";
					}else{	
						$user_db=$_SESSION['name']; //Seta o nome

						$array_name=explode(" ",$user_db);  // Quebra o nome           
						
						$user=strtoupper($array_name[0]);	//pega o primeiro nome(array[0])
						
						echo "<a href='#menu'>".$user."</a>";
					}
				?>
			
			</header>

			




		