    <header>  
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
								Kvik é a primeira plataforma de voluntariado. Dedicada, exclusivamente aos idosos.
								Transforme o mundo. Seja voluntário.</font></font></h1>
							<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
								</font></font>
							</h2>	
							
							


							<div class="button-sw-block">
								<p>
									
									<?php
										if(isset($_SESSION['id'])){ 
											echo "";
										}else{
											echo "<a class='call-to-click text-right' style='margin-right: 12px;' 
													href=".DIRPAGE."cadastro> Quero Ser Voluntário</a>";
										}		
									?>   

							
							
									
									<?php
										if(isset($_SESSION['id'])){ 
											echo "";
										}else{
											echo "<a class='call-to-click text-right' style='margin-right: 12px;'
											href=".DIRPAGE."cadastro-idoso> Quero Cadastrar um Idoso</a>";
										}
									?>   	

								</p>
								<p></p>
							</div>





						</div>
					</div>
				</div>
			</div>
		</div>
	</header>