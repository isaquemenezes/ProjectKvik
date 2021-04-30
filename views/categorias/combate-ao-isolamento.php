<?php 
	namespace Models;
	// \Classes\ClassLayout::setHeadRestrito();
   
   \Classes\ClassLayout::setHeadSubPage('kvik', 'Causa Educação Financeira');
	 
?>
<style>
:root {
	--main: orange;
	--bg:#0b1218;
	--bg-body:#131d28;
}



    main {
        display:inline-block;
	
    margin-top: 3em;
   margin-left: auto;
   margin-right: auto;
	padding: 1em 0;
}

.cards { 
    margin-top: 3em;
	display: inline-grid;
	grid-template-columns: repeat(1, 1fr);
	grid-gap: 3rem;
}

.card {
	background: var(--bg);
	/* padding: 2rem 1rem; */
    padding: 3em 3.5em 1.5em;
}
.card-icon {
	text-align: center;
	display: grid;
	place-items:center;
	
}
.card-icon span {
	height: 55px;
	width: 55px;
	color: #fff;
	font-size: 2rem;
	border-radius: 6px;
	display: grid;
	place-items:center;

}

.follow span {
	color: #0072f2;
	background: #e5f3fe;
}

.likes span {
	color: #f42a26;
	background: #fde9ea;
}

.comment span {
	color: #ffbc01;
	background:#fff8e5;
}

.card-info {
	text-align: left;
	margin-top: .6em;
}
.card-info h2 {
	font-size: 1.3em;
    color: var(--main);
    text-align: center;
}
.card-info small {
	display: inline-block;
	color: var(--main);
	font-weight: 500;
}
.card-info ul {
    display: inline-block;
	color: var(--main);
	font-weight: 500; 

}

.card-images {
	display: flex;
	justify-content: center;
	align-items: center;
	margin-top: 1.3rem;
}
.card-images div {
	height: 45px;
	width: 45px;
	background-size: cover;
	background-repeat: no-repeat;
	border-radius: 50%;
	border: 4px solid #efefef;
	position:relative;
	margin-left: -15px;
}
.card-images div:first-child {
	margin-left: 0;

}



/*Mobile Responsive*/
@media only screen and (max-width: 1124px) {
	
	
	#menu-toggle ~ .main-content header {
		left: calc(65px + 1rem);
	}
	#menu-toggle ~ .main-content {
		margin-left: 65px;
	}


	

}

@media only screen and (max-width: 854px) {
	.cards {
		grid-template-columns: repeat(2, 1fr);
	}

	.chart-grid {
		grid-template-columns: 100%;
	}
}

@media only screen and (max-width: 768px) {
	.search {
		display: none;
	}
}

@media only screen and (max-width: 630px) {
	.cards {
		grid-template-columns: 100%;
	}	
}

</style>

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
					<h2>Causa Combate Ao Isolamento</h2>
				</header>

			</div>

		</section>




		<!-- <section id="one" class="wrapper style2">
			<div class="inner">
				<div class="grid-style"> -->
					<?php //Paginação

					//Receber o número da página
					$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
					$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
		
					//Setar a quantidade de itens por pagina
					$qnt_result_pg = 9;
		
					//calcular o inicio visualização
					$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;

						$crud=new ModelCrud();
						$BFetch=$crud->selectDB("*", "users_idoso", "ORDER BY id DESC LIMIT $inicio, $qnt_result_pg",array());
						while($users_idoso=$BFetch->fetch(\PDO::FETCH_ASSOC)){ ?>



<!-- <main> -->

			<div class="cards">

				<div class="card">

					<div class="card-icon follow">
						<span class="fa fa-users"></span>
					</div>

					<div class="card-info">
                    <h2><?php $first_name= explode(" ",$users_idoso['nome']); echo $first_name[0]; ?></h2>
                   
                    <ul>
										
											<li>Cidade<?php echo $users_idoso['cidade']; ?></li>
											<li>Bairro <?php echo $users_idoso['bairro']; ?></li>
											<li>Data <?php echo $users_idoso['dateCreated']; ?></li>
											<li>Pode ser a distância? <?php echo $users_idoso['Aa']; ?></li>
											
											

										</ul>
						

						
					</div>

					<footer class="align-center">

										<a href="<?php echo DIRPAGE."profile?id=".$users_idoso['id']; ?>" class="button special">Perfil completo</a>
										
										<br><br><a href="<?php echo DIRPAGE.'controllers/controllerCon?con='.$users_idoso['id'];?>" class="button special"><span class="fa fa-users"></span>Conecta-se </a>

										
									</footer>


				</div>


				

			</div>

                        <!-- </main> -->



						
						













					<?php }?>	
</div>
				<!-- </div>				
			</div>			
		</section> -->

		
		<div style="padding:2em;"class="align-center">
			<?php //Paginação 

				//Paginação - Soma a quantidade de usuários	
				$result_page=$crud->selectDB("*", "users_idoso", "", array());
				
				//Quantidade Total de Registros
				$cont_page=$result_page->rowCount();
				
				//Quantidade de pagina 
				$quantidade_pg = ceil($cont_page / $qnt_result_pg);		
						
				//Limitar os link antes depois
				$max_links = 2;
				echo "<a style='margin: 5px; text-decoration: none;' href='educacao-financeira?pagina=1'>Primeira</a> ";
					
					for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++)
					{
						if($pag_ant >= 1)
						{
							echo "<a style='margin: 5px;' href='educacao-financeira?pagina=$pag_ant'>$pag_ant</a> ";
						}
					}
							
					echo "$pagina ";
						
					for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++)
					{
						if($pag_dep <= $quantidade_pg)
						{
							echo "<a style='margin: 5px;' href='educacao-financeira?pagina=$pag_dep'>$pag_dep</a> ";
						}
					}
					
				echo "<a style='margin: 5px; text-decoration: none;' href='educacao-financeira?pagina=$quantidade_pg'>Ultima</a>";
						
			?>		
		</div>
			
		
		
			<?php include_once 'includes/footer.php';?>
			<!--======= FOOTER SCRIPTS =======-->
			<?php \Classes\ClassLayout::setFooter(); ?>
