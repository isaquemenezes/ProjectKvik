<?php 
	//\Classes\ClassLayout::setHeadRestrito(); // Inicia a Sessão  
 	\Classes\ClassLayout::setHead('Área Restrita','Área exclusiva para membros!'); 
 	include "./models/ModelCrud.php"; ?>
	
	<!--=== HEADER ===---->
	<?php include 'includes/headerCategoria.php'; ?>

 	<div class="container-fluid">
	 	<div id="content" class="row d-flex align-items-stretch">
		<main class="col p-0 h-100">
			<section id="section-team-dev" class="section-grey-grey">
			<div class="container">
					<h2 class="cty-h2">COMBATE AO ISOLAMENTO </h2>
					<div class="team_column pt-5">

					<!--Lista db - Via jQuery-->
					<span id="conteudoListaDB"></span>	

				</div>
			</div>
			</section>
		</div><!-- Close  <main class="col p-0 h-100">-->

			<div class="container-fluid">
				<div id="content" class="row d-flex align-items-stretch">		
					<main class="col p-0 h-100">					
						<div class="p-5">
							<!--============= SECTION ENCONTRE SUA CAUSA
							=========================================-->
							<?php include 'includes/sectionCausas.php';?>
						</div>
					</main>
				</div>
			</div>
			<!--==== SOBRE NÓS ================-->
			<?php include 'includes/sectionSobre.php';?>

			<!--==== PARCEIROS ================-->
			<?php include 'includes/sectionParceiros.php';?>
			<br><br>

			<!--============= FOOTER =============-->
			<?php include 'includes/footer.php'; ?>	

			<!--======= FOOTER SCRIPTS =======-->
			<?php \Classes\ClassLayout::setFooter(); ?>
