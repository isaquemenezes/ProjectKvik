<?php 
	namespace Models;
	\Classes\ClassLayout::setHeadRestrito();
   
   \Classes\ClassLayout::setHeadSubPage('Área Restrita', 'Área exclusiva para categoria combate ao isolamento');
	 
?>

		<!-- Header ========================-->
		<?php include 'includes/subPages/header.php'; ?>
		
		<!-- Nav ======================= -->
		<?php include 'includes/subPages/nav-menu.php'; ?>
		
		<!-- Section One =============================-->
		<section id="One" class="wrapper style3">		
	
			<div class="inner">
				<header class="align-center"> 
					<img  style="margin: -2em;" src="<?php echo DIRIMG.'logo_kvik.png';?>" alt="logo kvik">	
                    <p></p>
                    
                    <?php 
                    
					$id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);		
					

						$crud=new ModelCrud();
						$BFetch=$crud->selectDB("*", "users_idoso", "WHERE id=?",array($id));
                        $users_idoso=$BFetch->fetch(\PDO::FETCH_ASSOC)?>
                        

					<h2>Perfil Do Senhor (a) <?php echo $users_idoso['nome']?></h2>
				</header>
			</div>
		</section>

	<!--style para show link-->
<style type="text/css">
		
		footer > a{
			
			cursor: pointer;
			font-family: sans-serif;
			font-size: 1em;
			color: white;
			width: 200px;
			height: 50px;
			background-image: linear-gradient(90deg, #6979F8, #00C48C, #FF647C, #6979F8);
			background-size: 400%;
			border:none;
			border-radius: 30px;
		}
		footer > a::after{ content: ''; opacity: 0; }
		footer > a:hover::after{
			content: '';
			display: block;
			width: 200px;
			height: 100px;
			background-color: aliceblue;
			position: absolute;
			top: calc(50vh - 50px);
			left: calc(50vw - 100px);
			border-radius: 40px;
			z-index: -1;
			background-image: linear-gradient(90deg, #6979F8, #00C48C, #FF647C, #6979F8);
			background-size: 400%;
			filter: blur(40px);
			opacity: 1;
			transition: opacity .5s linear;
			animation: animacao 5s linear infinite;
		}
		footer > a:hover{	animation: animacao 5s linear infinite;	}

		@keyframes animacao{
			from{ background-position: 0%;	}
			to{	background-position: 400%;  }
		}
	</style>

		<section id="one" class="wrapper style2">
			<div class="inner">
			
                  
                    
                    <div>
							<div class="box">						
								<div class="content">

									<header class="align-center">
										<h2><?php echo $users_idoso['nome']; ?></h2>
                                    </header>
                                    
                                    <p style="text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, in. Expedita corporis
                                         culpa voluptatibus laboriosam quidem qui facere, autem, 
                                         libero dicta adipisci repellendus provident atque dolorem mollitia 
                                         dignissimos corrupti quo.</p>
									<p>
										<ul class="text-muted small">
											<li>Cidade <?php echo $users_idoso['cidade']; ?></li>
											<li>Bairro <?php echo $users_idoso['bairro']; ?></li>
											<li>Data <?php echo $users_idoso['dateCreated']; ?></li>
											<li>Pode ser a distância? <?php echo $users_idoso['Aa']; ?></li>
											<li>Sexo <?php echo $users_idoso['sexo']; ?></li>
											

										</ul>
									</p>								
									<footer class="align-center">

										<a href="<?php echo DIRPAGE.'./combate-ao-isolamento';?>" class="button special">Conecta</a>
									
									</footer>
								</div>
							</div>
						</div>


							
			</div>			
		</section>

		
		<div style="padding:2em;"class="align-center">
			
		</div>
			
		
		
			<?php include_once 'includes/footer.php';?>
			<!--======= FOOTER SCRIPTS =======-->
			<?php \Classes\ClassLayout::setFooter(); ?>
