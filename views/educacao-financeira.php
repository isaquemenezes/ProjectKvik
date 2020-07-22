<?php \Classes\ClassLayout::setHeadRestrito(); // Inicia a Sessão  ?>
<?php \Classes\ClassLayout::setHead('Área Restrita','Área exclusiva para membros!'); ?>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/ProjectKvik/PDO/classes/ClassCrud.php"); ?>

			
	<!--body id="mod_corporate" class="root_home" style="padding-top: 0px;"-->
	
	<!--=== HEADER ===---->
	<?php include 'includes/headerCategoria.php'; ?>


 	<div class="container-fluid">
	 	<div id="content" class="row d-flex align-items-stretch">
		<main class="col p-0 h-100">
			<section id="section-team-dev" class="section-grey-grey">
				<div class="container">
						<h2 class="cty-h2">Educação Financeira - Lista </h2>
						<div class="team_column pt-5">
						<ul>
								<li><div class="card-body">
									<img  src="./assets/images/idososentado.jpg">Pierre AMIEL<p class="card-text">Book your future premium 
									account, and be sure to get one of first premium accounts at the lauching.<br><br></p>
								</div></li>			
							
						</ul>	 
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

							<!--============= SECTION VANTAGENS
							=================================-->							
							<section id="section-products" class="section-null pt-5">
								<div class="container">
									<h2 class="cty-h2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Veja as vantagens de ser voluntário -Tentar sensibilizar, alertar ou mesmo apenas listar algumas vantagens em ser voluntário(ainda estou pensando)-  </font></font></h2>
									<div class="row">
									<!--DIV Vazia -->
									<div class="col-sm-12 col-md-12 col-lg-6 py-5">
										<div class="row">
											<div class="col-3 text-left" style="font-size: 6em;">
												<img class="svg-inline--fa fa-search fa-w-16 texte_bleu" src="./assets/images/conhecimento.png">
											</div>
											<div class="col-9 pt-4">
												<h4 class="cty-h4 pr-lg-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
													Solidão maltrata o corpo e a mente dos idosos</font></font></h4>
												<p class="text-justify pr-lg-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
													Com o aumento da expectativa de vida, o mundo observa a formação de um exército de solitários.</font>
													<font style="vertical-align: inherit;">Nos últimos anos, diversos estudos têm apontado uma forte 
													associação entre a solidão e a incidência de doenças crônicas em idosos. De fato, pesquisadores 
													da Universidade de Chicago descobriram que o isolamento pode aumentar o risco de morte em 14% nas 
													faixas etárias mais avançadas. </font><font style="vertical-align: inherit;">
													O trabalho, liderado pelo psicólogo e especialista no assunto John Cacioppo, descobriu que o estresse 
													provocado por essa sensação induz respostas inflamatórias nas células, afetando, entre outras coisas, 
													a produção dos leucócitos, estruturas que defendem o organismo de infecções. </font></font>
												</p></font></font>
												<p>	<a class="call-to-click text-right" href="#">Junte-se a nós</a></p>
											</div>
										</div>
									</div>
									</div>
								</div>
							</section>
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