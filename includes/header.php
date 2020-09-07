    <header>  
        <!--========== NAV  ==========--->
		<?php include 'includes/nav.php'; ?>

		<!--=== "banner-bloc" =====-->		
		<div id="banner-bloc">
			<div class="container main-bloc">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
						<div class="d-flex align-items-start flex-column">
							<h1 style="color: #31708f">		
								Kvik é uma plataforma social de voluntariado dedicada aos idosos.
								Transforme o mundo. Seja voluntário.</h1>
							<h2></h2>	
							
							<div class="button-sw-block">
								<p>
									<?php
										// Link Quero Ser Voluntário
										if(isset($_SESSION['id_users'])){ echo "";	}
										else{   echo "<a class='call-to-click text-right' style='margin-right: 12px;' 
													href=".DIRPAGE."cadastro> Quero Ser Voluntário</a>";	}		
									?>
									<!--Link Quero Cadastrar um Idoso-->
									<a class='call-to-click text-right' style='margin-right: 12px;'
										href="<?php echo DIRPAGE.'cadastro-idoso'; ?>"> Quero Cadastrar um Idoso</a>   	
								</p>
								<p></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>