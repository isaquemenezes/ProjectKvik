<?php 
if(isset($_SESSION['id'])){
echo \Classes\ClassLayout::setHead(strtoupper($_SESSION['name']).' | Kvik Plataforma de Voluntariado', 'KVIK Plataforma de voluntariado.');
echo \Classes\ClassLayout::setHeadRestrito();
	}else{
		echo \Classes\ClassLayout::setHead(' | Kvik Plataforma de Voluntariado', 'KVIK Plataforma de voluntariado.'); 

	}	
	?>
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
				
	<!--=== HEADER ===---->
	<?php include 'includes/header.php'; ?>
	
	<!--========== SOBRE NÓS ================-->
	<?php include 'includes/sectionSobre.php';?>

	<!--==== PARCEIROS 	================-->
	<?php include 'includes/sectionParceiros.php';?><br><br>

	<!--============= FOOTER =============-->
	<?php include 'includes/footer.php'; ?>	
			
	<!--======= FOOTER SCRIPTS =======-->
	<?php \Classes\ClassLayout::setFooter(); ?>