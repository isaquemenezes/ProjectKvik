<?php //\Classes\ClassLayout::setHeadRestrito(); // Inicia a Sessão  ?>
<?php \Classes\ClassLayout::setHead('Área Restrita','Área exclusiva para membros!'); ?>
<?php include ("{$_SERVER['DOCUMENT_ROOT']}/ProjectKvik/PDO/classes/ClassCrud.php"); ?>
		
	<!--- STYLE PARTÍCULAS -->
	<style type="text/css">
		#particles-js{ width: 100% height: 300px; }
		.background { position: absolute; display: block; top: 0; left: 0; z-index: 0;}
	</style>	

	<!---- INICIALIZAR PARTICULAS ---->
	<script type="text/javascript">		
		window.onload = function() {
            Particles.init({
            selector: '.background'
            });
		};
	</script>

	<!---- PARTÍCULAS ---->
	<div id="particles-js"></div>
	<canvas class="background"></canvas>
	<script src="./assets/js/particles.js"></script>
				
	<!--body id="mod_corporate" class="root_home" style="padding-top: 0px;"-->
	
	<!--=== HEADER ===---->
	<?php include 'includes/header.php'; ?>
	
 	<div class="container-fluid" id="tech">
	 	<div id="content" class="row d-flex align-items-stretch">
			<main class="col p-0 h-100">
				<section id="section-team-dev" class="section-grey-grey">
					<div class="container">
						<h2 class="cty-h2">Educação Tecnológica - Lista </h2>
						<div class="team_column pt-5">
							<?php 
								$crud=new ClassCrud();
								$BFetch=$crud->selectDB("*", "users_idoso", "", array());

								
								while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){
							?>
								<ul>
									<li>
										<div class="card-body">
											<!--img  src="./assets/images/idososentado.jpg"-->
											<?php echo 'Nome = '.$Fetch['nome']; ?>
											<p><?php echo 'Idade = '.$Fetch['anoNascimento']; ?></p>
											<p><?php echo 'Cidade = '.$Fetch['cidade']; ?></p>	
											<p><?php echo 'Bairro = '.$Fetch['bairro']?></p>
											<p><?php echo'Pode ser ONLINE ? '. $Fetch['ead']?></p>
										</div>
									</li>

									
							<?php 
                    			}
                			?>
								</ul>	 
						</div>

						<!--teste listar com javascript-->
						<span id="#conteudoListaDB">aqui Lista</span>
					</div>
				</section>
			</main><!-- Close  main -->
		</div>
	</div><!-- CLOSE div -->
		
	<div class="container-fluid">
		<div id="content" class="row d-flex align-items-stretch">		
			<main class="col p-0 h-100">					
				<div class="p-5">
					<!--============= SECTION ENCONTRE SUA CAUSA
					=========================================-->
					<?php include 'includes/sectionCausas.php';?>

					<!--============= SECTION VANTAGENS
						
					<section id="section-products" class="section-null pt-5">
						<div class="container">
							<h2 class="cty-h2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
								Veja as vantagens de ser voluntário -Tentar sensibilizar, alertar ou mesmo apenas listar algumas 
								vantagens em ser voluntário(ainda estou pensando)-  </font></font>
							</h2>
							<div class="row">
								<!--<div class="col-sm-12 col-md-12 col-lg-6 py-5">
									<div class="row">
										<div class="col-3 text-left" style="font-size: 6em;">
											<img class="svg-inline--fa fa-search fa-w-16 texte_bleu" src="./assets/images/conhecimento.png">  
										</div>
										<div class="col-9 pt-4">
											<h4 class="cty-h4 pr-lg-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
											Em 2030, Brasil terá a quinta população mais idosa do mundo.</font></font>
											</h4>
											<p class="text-justify pr-lg-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">															
												De acordo com a Organização Mundial de Saúde (OMS) o número de pessoas com idade 
												superior a 60 anos chegará a 2 bilhões de pessoas até 2050; isso representará um quinto da população mundial.</font>
												<font style="vertical-align: inherit;">
												Segundo dados do Ministério da Saúde, o Brasil, em 2016, tinha a 
												quinta maior população idosa do mundo, e, em 2030, o número de idosos 
												ultrapassará o total de crianças entre zero e 14 anos.
												O maior problema é a ausência de sensibilidade administrativa
												para conduzir os serviços sociais.	</font></font></p>
											<p><a class="call-to-click text-right" href="#">Junte-se a nós</a></p>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-6 py-5">
									<div class="row">
										<div class="col-3 text-left" style="font-size: 6em;">
											<img class="svg-inline--fa fa-search fa-w-16 texte_bleu" src="./assets/images/conhecimento.png">
										</div>
										<div class="col-9 pt-4">
											<h4 class="cty-h4 pr-lg-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
												71% dos municípios não têm instituições para idosos</font></font>
											</h4>
											<p class="text-justify pr-lg-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
												A maior parte das existentes são filantrópicas (65,2%), 28,2% são privadas e apenas 6,6% 
												são públicas</font><font style="vertical-align: inherit;">
												As instituições brasileiras para idosos estão concentradas na região
												Sudeste (dois terços), sendo que apenas o estado de São Paulo tem 34,3% do
												total. Em média, cada instituição gasta R$ 717,91 por residente, valor
												este muito afetado pelos valores extremos</font></font></p>
												Com mais de 20 milhões de idosos, o Brasil tem apenas 218 asilos públicos. </font></font>
											</p>
											<p><a class="call-to-click text-right" href="#">Junte-se a nós</a></p>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-6 py-5">
									<div class="row">
										<div class="col-3 text-left" style="font-size: 6em;">
											<img class="svg-inline--fa fa-search fa-w-16 texte_bleu" src="./assets/images/conhecimento.png">
										</div>
										<div class="col-9 pt-4">
											<h4 class="cty-h4 pr-lg-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
											País não está pronto para uma 'sociedade de idosos', diz especialista.</font></font></h4>
											<p class="text-justify pr-lg-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
												As estatísticas mostram que o brasileiro se prepara mal para enfrentar o momento em que sua a sua força 
												produtiva se esgota.</font><font style="vertical-align: inherit;">
												Em um ranking de mais de 144 países, o Brasil ocupa um modesto 101° em reserva de aposentadoria, atrás de 
												várias nações latino-americanas e muito abaixo de países desenvolvidos, como o Canadá e os Estados Unidos </font>
												<font style="vertical-align: inherit;">. Em 2017, apenas 11% dos brasileiros declararam poupar para a velhice.
												No Canadá esse percentual é de 59%. “Não é só um problema da pobreza”, diz Kalache. “O brasileiro não tem 
												educação financeira. É a falta de precaução”.</font></font></p></font></font>
											</p>
											<p><a class="call-to-click text-right" href="#">Junte-se a nós</a></p>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-6 py-5">
									<div class="row">
										<div class="col-3 text-left" style="font-size: 6em;">
											<img class="svg-inline--fa fa-search fa-w-16 texte_bleu" src="./assets/images/conhecimento.png">
										</div>
										<div class="col-9 pt-4">
											<h4 class="cty-h4 pr-lg-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
												Solidão maltrata o corpo e a mente dos idosos</font></font>
											</h4>
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
					</section>	=================================-->
				</div>
			</main>
		</div>
	</div> <!-- CLOSE DIV PRINCIPAL --> 
		
	<!--========== SOBRE NÓS ================-->
	<?php include 'includes/sectionSobre.php';?>

	<!--==== PARCEIROS 	================-->
	<?php include 'includes/sectionParceiros.php';?><br><br>

	<!--============= FOOTER =============-->
	<?php include 'includes/footer.php'; ?>	
			
	<!--======= FOOTER SCRIPTS =======-->
	<?php \Classes\ClassLayout::setFooter(); ?>