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

	<!--style para button-->
<style type="text/css">
		
		footer > a{
			
			cursor: pointer;
			font-family: sans-serif;
			font-size: 1em;
			color: white;
			width: 200px;
			height: 50px;
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
		<?php include 'includes/header.php'; ?>
		<!-- /Header =======================-->	

		<!-- Nav ======================= -->
		<?php include 'includes/nav.php'; ?>
		<!-- Nav /======================= -->	

		<!-- Banner ===============================-->
		<?php include 'includes/section-banner.php'; ?>	
		<!-- /Banner ==============================-->

		<!-- One Category =======================-->
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

		<!--============= JS ================-->
		<?php Classes\ClassLayout::setFooter()?>
			
			

