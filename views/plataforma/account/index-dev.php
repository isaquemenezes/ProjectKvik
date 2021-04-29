<?php 
    namespace Models;

    // \Classes\ClassLayout::setHeadRestrito(); 
    \Classes\ClassLayout::setHeadSubPage(strtoupper($_SESSION['name']).' Minha Conta',' Gerencie Sua Conta');     

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,minimun-scale=1,maximum-scale=1, initial-scale=1">
	<!-- <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'> -->
    
	<!-- <title>Kvik Plataforma | <?php //echo strtoupper($_SESSION['name']); ?></title> -->
	<link rel="stylesheet" type="text/css" href="<?php echo DIRCSS.'stylesheet.css'?>">
	
</head>
<body>

	<input type="checkbox" id="menu-toggle">

	<div class="sidebar">
		
		<div class="brand">
			<span class="fa fa-affiliatetheme"></span>
			<h2><a href="<?php echo DIRPAGE.'';?>">Kvik</a></h2>				
		</div>
		
		<div class="sidemenu">
			
			<div class="side-user">
				<div class="side-img" style="background-image: url(library/images/user.jpg)"></div>
				<div class="user">
					<small>Léonard Vinci</small>
					<p>Software Developer</p>
				</div>
			</div>
			
			<ul>
				<li>
					<a href="#" class="active"> 
						<span class="fa fa-home"></span> 
						<span>Minha conta</span> 
					</a>
				</li>

				<li>
					<a href="#" > 
						<span class="fa fa-balance-scale"></span> 
						<span>Configurações</span> 
					</a>
				</li>

				<li>
					<a href="analytics.html"> 
						<span class="fa fa-line-chart"></span> 
						<span>Analytics</span> 
					</a>
				</li>

				<li>
					<a href="calendar.html"> 
						<span class="fa fa-calendar"></span> 
						<span>Calendar</span> 
					</a>
				</li>

				<li>
					<a href="#"> 
						<span class="fa fa-users"></span> 
						<span>Trocar senha</span> 
					</a>
				</li>

				<li>
					<a href="#"> 
						<span class="fa fa-shopping-cart"></span> 
						<span>Ecommerce</span> 
					</a>
				</li>

				<li>
					<a href="#"> 
						<span class="fa fa-envelope"></span> 
						<span>Mailbox</span> 
					</a>
				</li>

				<li>
					<a href="#"> 
						<span class="fa fa-check-circle"></span> 
						<span>Tasks</span> 
					</a>
				</li>

				<li>
					<a href="#"> 
						<span class="fa fa-lock"></span> 
						<span>Authentication</span> 
					</a>
				</li>

				<li>
					<a href="#"> 
						<span class="fa fa-usd"></span> 
						<span>Desativar minha conta</span> 
					</a>
				</li>

			</ul>

		</div>

	</div>

	<div class="main-content">
		
		<header>			
			
			<label for="menu-toggle" class="menu-toggler">
				<span class="fa fa-bars"></span>
			</label>

			<div class="search">
				<span class="fa fa-search"></span>
				<input type="search" name="" placeholder="Enter keyword">
			</div>

			<div class="head-icons">
				<span class="fa fa-bell"></span>
				<span class="fa fa-bookmark"></span>
				<span class="fa fa-comment"></span>
			</div>

		</header>

		<main>
			

			<!-- <div START TEST -->
				<div class="recent-grid">
				<div class="projects">
					<div class="card">
						<div class="card-header">
							<h3>Perfil</h3>
							<!-- <button>Editar Perfil<span class="fa fa-arrow-right"></span></button> -->
							<a href=""> <i class="fa fa-cog" aria-hidden="true"></i>
 Editar Perfil</span></a>
						</div>

						<div class="card-body">
							<table width="100%"> 
								<thead>
									<tr>
										<td>Campo</td>
										<td>Dado</td>
										<td>Público</td>
									</tr>
								</thead>

								<tbody>
									
									<tr>
								
										<td>Nome</td>
										<td>Kaio Santos Malcher</td>
										<td><span class="status purple"></span>SIM</td>

										<tr>
											<td>Contato</td>
											<td>(11) 9 63522-4422</td>
											<td><span class="status pink"></span>NAO</td>
										</tr>

										<tr>
											<td>Cidade</td>
											<td>São Paulo</td>
											<td><span class="status orange"></span>SIM</td>
										</tr>

										<tr>
											<td>Bairro</td>
											<td>São Tadeu</td>
											<td><span class="status orange"></span>SIM</td>
										</tr>

										<tr>
											<td>Grau de Ensino</td>
											<td>Ensino superior</td>
											<td><span class="status orange"></span>SIM</td>
										</tr>

										<tr>
											<td>Profisão</td>
											<td>Eng. da Computação</td>
											<td><span class="status orange"></span>SIM</td>
										</tr>

										<tr>
											<td>Data de Nascimento</td>
											<td>21 / 03 / 2021</td>
											<td><span class="status orange"></span>NAO</td>
										</tr>

										<tr>
											<td>Rede social</td>
											<td>LinkedIn</td>
											<td><span class="status orange"></span>SIM</td>
										</tr>

										<tr>
											<td>Conosco desde</td>
											<td>21 / 03 / 2021</td>
											<td><span class="status orange"></span>SIM</td>
										</tr>

										<tr>
											<td>CPF</td>
											<td>005.345.274-45</td>
											<td><span class="status orange"></span>NAO</td>
										</tr>

										<tr>
											<td>RG</td>
											<td>345234</td>
											<td><span class="status orange"></span>NAO</td>
										</tr>

										

									</tr>

									







								</tbody>
							</table>
						</div>
					</div>
					
				</div>

				<div class="customers">
					<div class="card">
						<div class="card-header">
							<h3>New customer</h3>

							<button>See all <sapn class="fa fa-arrow-right"></sapn></button>
						</div>

						<div class="card-body">

							<div class="customer">
								<div class="info">
									<img src="library/images/img1.png" width="40px" height="40px" alt="">
								
									<div>
										<h4>Lewis S. Cunningham</h4>
										<small>CEO Excerpt</small>
									</div>
								</div>

								<div class="contact">
									<span class="fa fa-user-circle"></span>
									<span class="fa fa-comment"></span>
									<span class="fa fa-phone"></span>
								</div>
							</div> <!-- END customer-->

							<div class="customer">
								<div class="info">
									<img src="library/images/img1.png" width="40px" height="40px" alt="">
								
									<div>
										<h4>Lewis S. Cunningham</h4>
										<small>CEO Excerpt</small>
									</div>
								</div>

								<div class="contact">
									<span class="fa fa-user-circle"></span>
									<span class="fa fa-comment"></span>
									<span class="fa fa-phone"></span>
								</div>
							</div> <!-- END customer-->

							<div class="customer">
								<div class="info">
									<img src="library/images/img1.png" width="40px" height="40px" alt="">
								
									<div>
										<h4>Lewis S. Cunningham</h4>
										<small>CEO Excerpt</small>
									</div>
								</div>

								<div class="contact">
									<span class="fa fa-user-circle"></span>
									<span class="fa fa-comment"></span>
									<span class="fa fa-phone"></span>
								</div>
							</div> <!-- END customer-->

							<div class="customer">
								<div class="info">
									<img src="library/images/img1.png" width="40px" height="40px" alt="">
								
									<div>
										<h4>Lewis S. Cunningham</h4>
										<small>CEO Excerpt</small>
									</div>
								</div>

								<div class="contact">
									<span class="fa fa-user-circle"></span>
									<span class="fa fa-comment"></span>
									<span class="fa fa-phone"></span>
								</div>
							</div> <!-- END customer-->

							<div class="customer">
								<div class="info">
									<img src="library/images/img1.png" width="40px" height="40px" alt="">
								
									<div>
										<h4>Lewis S. Cunningham</h4>
										<small>CEO Excerpt</small>
									</div>
								</div>

								<div class="contact">
									<span class="fa fa-user-circle"></span>
									<span class="fa fa-comment"></span>
									<span class="fa fa-phone"></span>
								</div>
							</div> <!-- END customer-->

							<div class="customer">
								<div class="info">
									<img src="library/images/img1.png" width="40px" height="40px" alt="">
								
									<div>
										<h4>Lewis S. Cunningham</h4>
										<small>CEO Excerpt</small>
									</div>
								</div>

								<div class="contact">
									<span class="fa fa-user-circle"></span>
									<span class="fa fa-comment"></span>
									<span class="fa fa-phone"></span>
								</div>
							</div> <!-- END customer-->

						</div><!--END card-body -->

					</div>
				</div><!--END customers -->

			</div>
			
				
			<!--</END DIV TEST> -->

		</main>
		
	</div>

	<label class="close-mobile-menu" for="menu-toggle"></label>

</body>
</html>