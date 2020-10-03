<?php
	/*   subPages
	 * 
	 * 
	 * 
	 * 
	 * 
	 * 
	 */

?>
    <header id="header">

	<div class="logo"><a href="<?php echo DIRPAGE.''; ?>">Kvik <span>Plataforma</span></a></div>
				<?php  
					$verify = new \Classes\ClassSessions();
					$acentos=new \Classes\ClassAuxilia();			
					$verify_session=$verify->verifyIdSessions();
					
					//if(isset($verify_session)){				

					if(isset($_SESSION['name'])){$user=$_SESSION['name'];
							echo "<a href='#menu'>".$user."</a>";}
					else{	echo "<a href='#menu'>MenuOff</a>";}
				?>
				
				
			</header>


					