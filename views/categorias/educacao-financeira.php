
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,minimun-scale=1,maximum-scale=1, initial-scale=1">
	<!-- <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'> -->
    
	<title>Responsive Dashboard Dark</title>
	<link rel="stylesheet" type="text/css" href="<?php echo DIRCSS.'stylesheet.css';?>">
	
</head>
<body>

	<input type="checkbox" id="menu-toggle">

	<div class="sidebar">
		
		<div class="brand">
			<span class="fa fa-affiliatetheme"></span>
			<h2>Artist</h2>				
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
					<a href="#"> 
						<span class="fa fa-home"></span> 
						<span>Dashboard</span> 
					</a>
				</li>

				<li>
					<a href="#" class="active"> 
						<span class="fa fa-balance-scale"></span> 
						<span>Finance</span> 
					</a>
				</li>

				<li>
					<a href="#"> 
						<span class="fa fa-line-chart"></span> 
						<span>Analytics</span> 
					</a>
				</li>

				<li>
					<a href="#"> 
						<span class="fa fa-calendar"></span> 
						<span>Calendar</span> 
					</a>
				</li>

				<li>
					<a href="#"> 
						<span class="fa fa-users"></span> 
						<span>Contacts</span> 
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
						<span>Pricing</span> 
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
			<div class="cards-col-three">

				<div class="card-col">

					<div class="card-icon follow">
						<span class="fa fa-users"></span>
					</div>
					<div class="card-info">
						<h2>3,4</h2>
						<small>Total follwers</small>
					</div>
					<div class="card-images">
						<div style="background-image: url(library/images/user.jpg)"></div>
						<div style="background-image: url(library/images/img1.png)"></div>
						<div style="background-image: url(library/images/img2.png)"></div>
						<div style="background-image: url(library/images/img3.png)"></div>
						<div style="background-image: url(library/images/img4.jpg)"></div>
					</div>

				</div>

				<div class="card-col">
				
					<div class="card-icon likes">
						<span class="fa fa-heart"></span>
					</div>
					<div class="card-info">
						<h2>19,876</h2>
						<small>Total likes</small>
					</div>
					<div class="card-images">
						<div style="background-image: url(library/images/user.jpg)"></div>
						<div style="background-image: url(library/images/img1.png)"></div>
						<div style="background-image: url(library/images/img2.png)"></div>
						<div style="background-image: url(library/images/img3.png)"></div>
						<div style="background-image: url(library/images/img4.jpg)"></div>
					</div>
				
				</div>

				<div class="card-col">

					<div class="card-icon comment">
						<span class="fa fa-comment"></span>
					</div>
					<div class="card-info">
						<h2>212,876</h2>
						<small>Total comments</small>
					</div>
					<div class="card-images">
						<div style="background-image: url(library/images/user.jpg)"></div>
						<div style="background-image: url(library/images/img1.png)"></div>
						<div style="background-image: url(library/images/img2.png)"></div>
						<div style="background-image: url(library/images/img3.png)"></div>
						<div style="background-image: url(library/images/img4.jpg)"></div>
					</div>
				
				</div>

			</div>

			<!-- <div class="chart-grid">
				
			</div> -->

		</main>
		
	</div>

	<label class="close-mobile-menu" for="menu-toggle"></label>

</body>
</html>