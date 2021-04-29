<?php
    namespace Models;

    \Classes\ClassLayout::setHeadRestrito();    
    // \Classes\ClassLayout::setHeadSubPage(strtoupper($_SESSION['name']).' Minha Conta','Área Gerencie Sua Conta!');


    /*Update de Dados de Usuário Volunteer*/
    if(isset($_GET['id'])){
        
        $id_users=$_GET['id'];

        $Acao="Editar";

        $crud=new ModelCrud();

        $select_users=$crud->selectDB("*", "users", "WHERE id=?", array($id_users));
        $users=$select_users->fetch(\PDO::FETCH_ASSOC);
        
        $Id     =$users['id'];
        $nome   =$users['nome'];
        $email  =$users['email'];
        $contato=$users['contato'];
        $cidade =$users['cidade'];
        $bairro =$users['bairro'];
    }

?>
   <!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,minimun-scale=1,maximum-scale=1, initial-scale=1">
	<!-- <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'> -->
    
	<!-- <title>Kvik Plataforma | <?php //echo strtoupper($_SESSION['name']); ?></title> -->
    <link rel="stylesheet" type="text/css" href="<?php echo DIRCSS.'main.css'?>">

    <link rel="stylesheet" type="text/css" href="<?php echo DIRCSS.'stylesheet.css'?>">

	
</head>
<body>

	<input type="checkbox" id="menu-toggle">

	<div class="sidebar">
		
		<div class="brand">
			<span class="fa fa-affiliatetheme"></span>
			<h2><a href="<?php echo DIRPAGE.'';?>">Kvik</a></h2>				
		</div>
		
		<div class="sidemenu">
			
			<div class="side-user">
				<div class="side-img" style="background-image: url(library/images/user.jpg)"></div>
				<div class="user">
					<small><?php echo strtoupper($_SESSION['name']); ?></small>
					<p>Developer </p>
				</div>
			</div>
			
			<ul>
				<li>
					<a href="#" class="active"> 
						<span class="fa fa-home"></span> 
						<span>Minha conta</span> 
					</a>
				</li>

				<li>
					<a href="#" > 
						<span class="fa fa-balance-scale"></span> 
						<span>Configurações</span> 
					</a>
				</li>

				<li>
					<a href="analytics.html"> 
						<span class="fa fa-line-chart"></span> 
						<span>Analytics</span> 
					</a>
				</li>

				<li>
					<a href="calendar.html"> 
						<span class="fa fa-calendar"></span> 
						<span>Calendar</span> 
					</a>
				</li>

				<li>
					<a href="#"> 
						<span class="fa fa-users"></span> 
						<span>Trocar senha</span> 
					</a>
				</li>

				<li>
					<a href="#"> 
						<span class="fa fa-shopping-cart"></span> 
						<span>Ecommerce</span> 
					</a>
				</li>

				<li>
					<a href="#"> 
						<span class="fa fa-envelope"></span> 
						<span>Mailbox</span> 
					</a>
				</li>

				<li>
					<a href="#"> 
						<span class="fa fa-check-circle"></span> 
						<span>Tasks</span> 
					</a>
				</li>

				<li>
					<a href="#"> 
						<span class="fa fa-lock"></span> 
						<span>Authentication</span> 
					</a>
				</li>

				<li>
					<a href="#"> 
						<span class="fa fa-usd"></span> 
						<span>Desativar minha conta</span> 
					</a>
				</li>

			</ul>

		</div>

	</div>

	<div class="main-content">
		
		<header>			
			
			<label for="menu-toggle" class="menu-toggler">
				<span class="fa fa-bars"></span>
			</label>

			<div class="search">
				<span class="fa fa-search"></span>
				<input type="search" name="" placeholder="Atualizar Meu Perfil">
			</div>

			<div class="head-icons">
				<span class="fa fa-bell"></span>
				<span class="fa fa-bookmark"></span>
				<span class="fa fa-comment"></span>
			</div>

		</header>

        

    <!--Retorno Ajax-->
    <div class="resultado"></div>
   
    <div style="width: 70%;  clear: none; margin-top: 9em; margin-right: auto; margin-left:auto;">
    
   
    <!-- Formulário -->
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



    <?php //include_once './includes/footer.php';?>
	
    <!--======= FOOTER SCRIPTS =======-->
	<?php //\Classes\ClassLayout::setFooter(); ?>
