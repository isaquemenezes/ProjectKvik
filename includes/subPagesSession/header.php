<?php
	/*   subPagesSession 
	 *  header para pages com Sessão de users logado
	 * 
	 * 
	 */	
    $verify=new \Classes\ClassSessions();	
     $acentos=new \Classes\ClassAuxilia();			
     $verify_session=$verify->verifyIdSessions();
	$name=$acentos->removeAcento($user_name);
?>
    <header id="header">

	<div class="logo"><a href="<?php echo DIRPAGE.''; ?>">
						Kvik<span> Plataforma Social</span></a></div>
				<a href="#menu"><?php echo strtoupper($name); ?></a>
				
				
			</header>


					