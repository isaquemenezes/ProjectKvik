<header id="header" class="alt">

				<div class="logo"><a href="javascript:void(0);" onclick="MoveTop()">Kvik <span>Plataforma</span></a></div>
				<?php  
					$verify = new \Classes\ClassSessions();
					$verify_session=$verify->verifyIdSessions();		

					if(isset($_SESSION['name'])){$user_db=$_SESSION['name'];
						$array_name=explode(" ",$user_db);            
            			$user=strtoupper($array_name[0]);	
						echo "<a href='#menu'>".$user."</a>";}
					else{	
						echo "<a href='#menu'>Menu</a>";
					}
				?>
			
			</header>

			




		