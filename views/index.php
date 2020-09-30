<?php \Classes\ClassLayout::setHead('kvik | Plataforma de Voluntariado','kvik'); ?>
<!--- STYLE PARTÍCULAS -->
<style type="text/css">
		#particles-js{ width: 100% height: 300px; }
		.background { position: absolute; display: block; top: 0; left: 0; z-index: 0;}
	</style>	

	<!---- INICIALIZAR PARTICULAS ---->
	<script> 
		window.onload = function() { Particles.init({ selector: '.background' }); };
	</script>

	<!------- PARTÍCULAS -------->
	<div id="particles-js"></div>
	<canvas class="background"></canvas>
	<script src="<?php echo DIRJS.'particles.js';?>"></script>
	
		<!-- Header ========================-->
		<?php include 'includes/header.php'; ?>
		<!-- /Header =======================-->	

		<!-- Nav ======================= -->
		<?php include 'includes/nav.php'; ?>
		<!-- Nav /======================= -->	

		<!-- Banner ===============================-->
		<?php include 'includes/section-banner.php'; ?>	
		<!-- /Banner ==============================-->

		<!-- One ================================-->
		<?php include 'includes/section-one.php'; ?>
		<!-- /One ===============================-->	

		<!-- Two ================================-->
		<?php include 'includes/section-two.php'; ?>
		<!-- /Two ===============================-->

		<!-- Three ================================-->
		<?php include 'includes/section-three.php'; ?>
		<!-- /Three ===============================-->	

		<!-- Footer ========================-->
		<?php include 'includes/footer.php'; ?>	
		<!-- /Footer ========================-->

		<!-- JS -->
		<script src="<?php echo DIRJS.'jquery-3.3.1.min.js';?>"></script>
		<script src="<?php echo DIRJS.'jquery.scrollex.min.js';?>"></script>
		<script src="<?php echo DIRJS.'skel.min.js';?>"></script>
		<script src="<?php echo DIRJS.'util.js';?>"></script>
		<script src="<?php echo DIRJS.'main.js';?>"></script>
			
			

