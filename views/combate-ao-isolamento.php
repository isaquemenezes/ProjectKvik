<?php 
	namespace Models;
   //\Classes\ClassLayout::setHeadRestrito();
   
   \Classes\ClassLayout::setHeadSubPage('Área Restrita', 'Área exclusiva para categoria combate ao isolamento');
	 
?>
<!--style para button-->
<style type="text/css">
		a{
			/* position: relative;*/
			cursor: pointer;
			font-family: sans-serif;
			font-size: 1em;
			color: white;
			width: 200px;
			height: 30px;
			background-image: linear-gradient(90deg, #6979F8, #00C48C, #FF647C, #6979F8);
			background-size: 400%;
			border:none;
			border-radius: 30px;
		}
		a::after{ content: ''; opacity: 0; }
		a:hover::after{
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
		a:hover{	animation: animacao 5s linear infinite;	}

		@keyframes animacao{
			from{ background-position: 0%;	}
			to{	background-position: 400%;  }
		}
	</style>




		<!-- Header ========================-->
		<?php include './includes/subPages/header.php'; ?>
		<!-- /Header =======================-->	

		<!-- Nav ======================= -->
		<?php include './includes/nav.php'; ?>
		<!-- Nav /======================= -->	

		<!-- Section One =============================-->
		<?php include_once './includes/subPages/section-one.php';?>


		<div>
							<div class="box">
								<div class="image fit">
									<img src="<?php echo DIRIMG.'pic02.jpg';?>" alt="" />
								</div>
								
								<!--Lista db - Via jQuery-->
								<span id="listaCombateIsolamento"></span>	


							</div>
		</div>
	
		
			<!--============= jquery-3.3.1.min.js =============-->
			<script src="<?php echo  DIRJS.'jquery-3.3.1.min.js';?>"></script>
		
			<script>
				Listagem dos usuários idosos do DB na page 
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

			<!--======= FOOTER SCRIPTS =======-->
			<?php \Classes\ClassLayout::setFooter(); ?>
