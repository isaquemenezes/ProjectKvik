<?php
    namespace Models;

    \Classes\ClassLayout::setHeadRestrito();    
    \Classes\ClassLayout::setHeadSubPage(strtoupper($_SESSION['name']).' Minha Conta','Área Gerencie Sua Conta!');


    /*Update de Dados de Usuário Volunteer*/
    if(isset($_GET['id'])){
        $Acao="Editar";

        $crud=new ModelCrud();
        $select_users=$crud->selectDB("*", "users", "WHERE id=?", array($_GET['id']));
        $users=$select_users->fetch(\PDO::FETCH_ASSOC);
        
        $Id     =$users['id'];
        $nome   =$users['nome'];
        $email  =$users['email'];
        $contato=$users['contato'];
        $cidade =$users['cidade'];
        $bairro =$users['bairro'];
    }

?>
    <!-- Header ===================================-->
    <?php include './includes/subPages/header.php'; ?>
	<!-- /Header ==================================-->	

    <!-- Nav ======================================= -->
	<?php include './includes/subPages/nav-menu.php'; ?>
	<!-- Nav /====================================== -->	

		<!-- Section One =====================-->
		<section id="One" class="wrapper style3">
			<div class="inner">
				<header class="align-center"><img  style="margin: -2em;" src="<?php echo DIRIMG.'logo_kvik.png';?>" alt="logo kvik">	
					<p></p>
					<h2>Atualize Seu Perfil</h2>
				</header>
			</div>
        </section> 
        <!-- /Section One =====================-->   

    <!--Retorno Ajax-->
    <div class="resultado"></div>
   
    <div style="width: 50%;  clear: none; margin: 5em 3em 0 25%;">
    <!--<h3>Atualize seu Perfil</h3>-->
      <!-- Form -->
    <form action="<?php echo DIRPAGE."controllers/controllerEditarPerfil"; ?>" name="formCadastr" id="formCadastr" method="post">
        <input type="hidden" id="Acao" name="Acao" value="<?php echo  $Acao; ?>">
        <input type="hidden" id="id" name="id" value="<?php echo $Id; ?>">
        
        <div class="row uniform">
            <div class="6u 12u$(xsmall)">
                <label for="">Nome </label>
                <input type="text" id="name" name="name" value="<?php echo $nome; ?>" required></div>
                
            <div class="6u$ 12u$(xsmall)">
                <label for="">Email </label>
                <input type="email" name="email" id="email" value="<?php echo $email; ?>" readonly></div>

            <div class="6u 12u$(xsmall)">
            <label for="">Contato </label>
                <input type="text" id="contato" name="contato" value="<?php echo $contato;?>"></div>

            <div class="6u 12u$(xsmall)">
            <label for="">Cidade </label>
                <input type="text" id="cidade" name="cidade" value="<?php echo $cidade; ?>"></div>

            <div class="6u 12u$(xsmall)">
            <label for="">Bairro </label>
                <input type="text" id="bairro" name="bairro" value="<?php echo $bairro; ?>"></div>
            
            <!-- Break -->
            <div class="12u$">
                <ul class="actions">
                    <li><input type="submit" value="<?php echo $Acao; ?>" ></li>
                </ul>
            </div>
        </div>
    </form>
</div>

<div style="width: 50%;  clear: none; margin: 20em">
</div>

    <?php include_once './includes/footer.php';?>
	
    <!--======= FOOTER SCRIPTS =======-->
	<?php \Classes\ClassLayout::setFooter(); ?>
