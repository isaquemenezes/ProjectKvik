    <header> 
	<!--style para button-->
<style type="text/css">
		.style{
			/* position: relative;*/
			cursor: pointer;
			font-family: sans-serif;
			font-size: 1em;
			color: white;
			width: 85px;
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
										else{   echo "<a 
													href=".DIRPAGE."cadastro> Quero Ser Voluntário</a>";	}		
									?>
									<!--Link Quero Cadastrar um Idoso-->
									<a class="style"
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