<?php 

if(isset($_SESSION['login'])){
        echo " ";

    }else{
        echo "

<section id='three' class='wrapper style2'>
				<div class='inner'>
					<header class='align-center'>
						<p class='special'>Nossos Parceiros e Apoiadores</p>
						<h2>Eles Acreditam na Gente </h2>
						<br><br><br><br>

							<div class='container'>
								<ul class='icons'>
										
									<div class='image fit'>

										<li><a href='#' ><img style='width: 250px; height: 150px;' src='".DIRIMG."ensino.jpg' alt=''></a></li>
										<li><a href='#' ><img style='width: 250px; height: 150px;' src='".DIRIMG."ensino.jpg' alt=''></a></li>
										<li><a href='#' ><img style='width: 250px; height: 150px;' src='".DIRIMG."ensino.jpg' alt=''></a></li>
									
									</div>
								
								</ul>	
							</div>
							
							<br><br><br><br>

					</header>
				</div>
			</section>";}