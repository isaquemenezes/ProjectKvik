<?php 
	namespace Models;
	\Classes\ClassLayout::setHeadRestrito(); 
 	\Classes\ClassLayout::setHead('Área Restrita','Área exclusiva para membros!'); 
	 
?>	 
	<!--=========== HEADER ======================-->
	<?php include 'includes/headerCategoria.php'; ?>

 	<div class="container-fluid">
	 	<div id="content" class="row d-flex align-items-stretch">
			<main class="col p-0 h-100">
				<section id="section-team-dev" class="section-grey-grey">
					<div class="container">
							<h2 class="cty-h2">COMBATE AO ISOLAMENTO </h2>
							<div class="team_column pt-5">

								<!--Lista db - Via jQuery-->
								<span id="listaCombateIsolamento"></span>	

							</div>
					</div>	
				</section>

			<div class="container-fluid">
				<div id="content" class="row d-flex align-items-stretch">		
					<main class="col p-0 h-100">					
						<div class="p-5">
							<!--===  SECTION ENCONTRE SUA CAUSA ======-->
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
			<!--============= jquery-3.3.1.min.js =============-->
			<script src="<?php echo  DIRJS.'jquery-3.3.1.min.js';?>"></script>
		
			<script>
				/* Listagem dos usuários idosos do DB na page */
				var qnt_result_pg = 5; 	//quantidades de Registros por páginas
				var pagina = 1;  		//page inícial

				$(document).ready(function (){
					listar_user(pagina, qnt_result_pg); //Chama a funcao para exibir os dados
				});

				function listar_user(pagina, qnt_result_pg){
					var dados_page ={
						pagina: pagina,
						qnt_result_pg: qnt_result_pg
					}
					$.post('listaDB/lista_combate_isolamento', dados_page, function(retorna_lista){
						$("#listaCombateIsolamento").html(retorna_lista);

					});
				}
			</script>

			<!--======= FOOTER SCRIPTS =======-->
			<?php \Classes\ClassLayout::setFooter(); ?>
