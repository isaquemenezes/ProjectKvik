<?php 
	
	$verify=new \Classes\ClassSessions();

?>
    <header id="header">

				
				<?php 

					$verify->verifyIdSessions();
					$user_session=$_SESSION['login'];
					$user_name=$_SESSION['name'];
					if(isset($user_session)){
						echo "<div class='logo'><a href='".DIRPAGE."index'>".$user_name."<span> Voluntário</span></a></div>";
					
					}else{
						echo "<div class='logo'><a href='".DIRPAGE."index'>
						Kvik<span> Plataforma Social</span></a></div>";
					}
					
				?>
				
				<a href="#menu">Menu</a>
			</header>


					