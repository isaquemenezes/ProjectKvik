
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
		
	<?php
	include 'header.php';
    /*<header>  
        <!--========== NAV  ==========--->
		<?php include 'includes/nav.php'; ?>

		<!--=== "banner-bloc" 
		==================-->
		<div id="banner-bloc">
			<div class="container main-bloc">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
						<div class="d-flex align-items-start flex-column">
							<h1 style="color: #31708f"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">		
								Kvik é uma plataforma de voluntariado. Dedicada ao idosos, prestando assistência na educação
								financeira, educação tecnológica e combate ao isolamente. Transforme o mundo. Seja voluntário.</font></font></h1>
							<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
								</font></font>
							</h2>	
							<div class="button-sw-block">
								<p><a class="call-to-click text-right" style="margin-right: 12px;" href="<?php echo DIRPAGE.'login';?>">Entrar </a>
								<a class="call-to-click text-right" href="<?php echo DIRPAGE.'cadastro';?>">Cadastrar um Idoso</a></p>
								<p></p>
							</div>						
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>*/