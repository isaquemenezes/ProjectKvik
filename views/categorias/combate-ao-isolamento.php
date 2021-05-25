<?php 
	namespace Models;
	\Classes\ClassLayout::setHeadRestrito();
   
   \Classes\ClassLayout::setHeadSubPage('Área Restrita', 'Área exclusiva para categoria combate ao isolamento');
?>

		<!-- Header ================================ -->
		<?php include 'includes/subPages/header.php'; ?>
		
		<!-- Nav ===================================== -->
		<?php include 'includes/subPages/nav-menu.php'; ?>
		
		<!-- Section One ==================== -->
		<section id="One" class="wrapper style3">		
	
			<div class="inner">

				<header class="align-center"> 
					<img  style="margin: -2em;" src="<?php echo DIRIMG.'logo_kvik.png';?>" alt="logo kvik">	
					<p></p>
					<h2>Causa Combate Ao Isolamento</h2>
				</header>

			</div>

		</section>

	<!--style para show link-->
	<style type="text/css">
		
		footer > a{cursor: pointer;font-family: sans-serif;font-size: 1em;color: white;width: 200px;height: 50px;background-image: linear-gradient(90deg, #6979F8, #00C48C, #FF647C, #6979F8);
			background-size: 400%;border:none;border-radius: 30px;}footer > a::after{ content: ''; opacity: 0; }
		footer > a:hover::after{content: '';display: block;width: 200px;height: 100px;background-color: aliceblue;position: absolute;top: calc(50vh - 50px);
			left: calc(50vw - 100px);border-radius: 40px;z-index: -1;background-image: linear-gradient(90deg, #6979F8, #00C48C, #FF647C, #6979F8);background-size: 400%;
			filter: blur(40px);opacity: 1;transition: opacity .5s linear;animation: animacao 5s linear infinite;}footer > a:hover{	animation: animacao 5s linear infinite;	}
		@keyframes animacao{
			from{ background-position: 0%;	}
			to{	background-position: 400%;  }
		}
		.card-icon {display: flex;place-items:left;}.card-icon span {height: 55px;width: 55px;color: #fff;font-size: 2rem;border-radius: 6px;display: grid;place-items:center;}
		.follow span {color: #0072f2;background: #e5f3fe;}
		
	</style>

		<section id="one" class="wrapper style2">
			<div class="inner">
				<div class="grid-style">

					<?php //Paginação

					
					$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);	//Receber o número da página	
					$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
		
					
					$qnt_result_pg = 2;//Setar a quantidade de itens por pagina
		
					
					$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;//calcular o inicio visualização

						$crud=new ModelCrud();
						$BFetch=$crud->selectDB("*", "users_idoso", "ORDER BY id DESC LIMIT $inicio, $qnt_result_pg",array());
						while($users_idoso=$BFetch->fetch(\PDO::FETCH_ASSOC)){ ?>
						
						<div>
							<div class="box">						
								<div class="content">

									<div class="card-icon follow">
										<span class="fa fa-users"></span>
									</div>

									<header class="align-center">

										<h2><?php $first_name= explode(" ",$users_idoso['nome']); echo $first_name[0]; ?></h2>
									
									</header>
							
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

									<a href="<?php echo DIRPAGE."profile?id=".$users_idoso['id']; ?>" class="button special">Perfil</a>
										<a href="<?php echo DIRPAGE.'';?>" class="button special">Conecta</a>
									
									</footer>

								</div>
							</div>
						</div>
					<?php }?>

				</div>				
			</div>			
		</section>

		
		<div style="padding:2em;"class="align-center">
			<?php //Paginação 

				$result_page=$crud->selectDB("*", "users_idoso", "", array());//Paginação - Soma a quantidade de usuários	
				
				$cont_page=$result_page->rowCount();	//Quantidade Total de Registros
								
				$quantidade_pg = ceil($cont_page / $qnt_result_pg);		//Quantidade de pagina 
						
				$max_links = 2;  //Limitar os link antes depois

				echo "<a style='margin: 5px; text-decoration: none;' href='combate-ao-isolamento?pagina=1'>Primeira</a> ";
					
					for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++)
					{
						if($pag_ant >= 1)
						{
							echo "<a style='margin: 5px;' href='combate-ao-isolamento?pagina=$pag_ant'>$pag_ant</a> ";
						}
					}
							
					echo "$pagina ";
						
					for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++)
					{
						if($pag_dep <= $quantidade_pg)
						{
							echo "<a style='margin: 5px;' href='combate-ao-isolamento?pagina=$pag_dep'>$pag_dep</a> ";
						}
					}
					
				echo "<a style='margin: 5px; text-decoration: none;' href='combate-ao-isolamento?pagina=$quantidade_pg'>Ultima</a>";
						
			?>		
		</div>
















		<section id="one" class="wrapper style2">
			<div class="inner">
				<!-- <div class="grid-style">
 -->







	<div class="row 50% uniform">
		<div class="4u">
		<div class="box">						
								<div class="content">

								<header class="align-center">

<h2>Primeiro Nome<?php $first_name= explode(" ",$users_idoso['nome']); echo $first_name[0]; ?></h2>

</header>

								<p>
										<ul class="text-muted small">
										
											<li>Cidade <?php echo $users_idoso['cidade']; ?> CidadeTeste</li>
											<li>Bairro <?php echo $users_idoso['bairro']; ?></li>
											<li>Data <?php echo $users_idoso['dateCreated']; ?></li>
											<li>Pode ser a distância? <?php echo $users_idoso['Aa']; ?></li>
											<li>Sexo <?php echo $users_idoso['sexo']; ?></li>
											

										</ul>
									</p>	
										
		<!-- <footer class="align-center">
		<p>
					Lorem ipsum dolor sit amet consectetur, adipisicing elit.
					 Assumenda quia voluptatem quas iste optio sint voluptate, error velit, quaerat, 
					 asperiores eveniet deleniti quos perspiciatis fuga. Facilis distinctio recusandae asperiores nulla!</p>
		
		</footer> -->

		<footer class="align-center">

										<a href="<?php echo DIRPAGE."profile?id=".$users_idoso['id']; ?>" class="button special">Perfil</a>
										<br><br>
										<a href="<?php echo DIRPAGE.'controllers/controllerCon?con='.$users_idoso['id'];?>" class="button special">Conecta</a>

									
									</footer>
			</div></div>
		</div>
		
		
		
		
		
	</div>

		
		


<!-- </div> -->
</div></div>

			<?php include_once 'includes/footer.php';?>
			<!--======= FOOTER SCRIPTS =======-->
			<?php \Classes\ClassLayout::setFooter(); ?>
