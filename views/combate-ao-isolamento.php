<?php 
	namespace Models;
	\Classes\ClassLayout::setHeadRestrito();
   
   \Classes\ClassLayout::setHeadSubPage('Área Restrita', 'Área exclusiva para categoria combate ao isolamento');
	 
?>

		<!-- Header ========================-->
		<?php include './includes/subPages/header.php'; ?>
		<!-- /Header =======================-->	

		<!-- Nav ======================= -->
		<?php include './includes/subPages/nav-menu.php'; ?>
		<!-- Nav /======================= -->	

		<!-- Section One =============================-->
		<!-- One -->
		<section id="One" class="wrapper style3">
		
	
		<div class="inner">
			<header class="align-center"> 
					<img  style="margin: -2em;" src="<?php echo DIRIMG.'logo_kvik.png';?>" alt="logo kvik">	
					<p></p>
					<h2>Causa Combate Ao Isolamento</h2>
				</header>
			</div>
		</section>
	

		<section id="one" class="wrapper style2">
			<div class="inner">
				<div class="grid-style">
					<?php 
						$crud=new ModelCrud();
						$BFetch=$crud->selectDB("*", "users_idoso", "",array());
						while($users_idoso=$BFetch->fetch(\PDO::FETCH_ASSOC)){
					?>
						<div>
							<div class="box">						
								<div class="content">
									<header class="align-center">
										<h2><?php echo $users_idoso['nome']; ?></h2>
									</header>
									<p>
										<ul class="text-muted small">
											<li>Cidade <?php echo $users_idoso['cidade']; ?></li>
											<li>Bairro <?php echo $users_idoso['bairro']; ?></li>
											<li>Data <?php echo $users_idoso['dateCreated']; ?></li>
											<li>Pode ser a distância? <?php echo $users_idoso['ead']; ?></li>
											<li>Sexo <?php echo $users_idoso['sexo']; ?></li>
											<?php 
												$select_users=$crud->selectDB("*", "users", "WHERE id=?", array($users_idoso['fk_users'])); 
												$users=$select_users->fetch(\PDO::FETCH_ASSOC);

											?>
											
											<li>Email do Responsável <?php echo $users['email']; ?></li>

										</ul>
									</p>								
									<footer class="align-center">
										<a href="<?php echo DIRPAGE.'combate-ao-isolamento';?>" class="button special">junta-se</a>
									</footer>
								</div>
							</div>
						</div>
					<?php }?>	
				</div>				
			</div>			
		</section>
	
			<!--============= jquery-3.3.1.min.js =============-->
			<script src="<?php echo  DIRJS.'jquery-3.3.1.min.js';?>"></script>
		
			<script>
				//Listagem dos usuários idosos do DB na page 
				var qnt_result_pg = 5; 	//quantidades de Registros por páginas
				var pagina = 1;  		//page inícial

				$(document).ready(function (){
					listar_user(pagina, qnt_result_pg); 
				});

				function listar_user(pagina, qnt_result_pg){
					var dados_page ={
						pagina: pagina,
						qnt_result_pg: qnt_result_pg
					}
					$.post('listaDB/lista_cisolamento', dados_page, function(retorna_lista){
						$("#listaCombateIsolamento").html(retorna_lista);

					});
				}
			</script>
			<?php include_once './includes/footer.php';?>
			<!--======= FOOTER SCRIPTS =======-->
			<?php \Classes\ClassLayout::setFooter(); ?>
