<?php \Classes\ClassLayout::setHead('kvik | Plataforma Social de Voluntariado','kvik'); ?>

<!--style para efeito button -->
<style type="text/css">
		
		footer > a{	cursor: pointer; font-family: sans-serif; font-size: 1em; color: white;
			width: 200px;height: 50px; background-image: linear-gradient(90deg, #6979F8, #00C48C, #FF647C, #6979F8);
			background-size: 400%; border:none;	border-radius: 30px;
		}
		footer > a::after{ content: ''; opacity: 0; }
		footer > a:hover::after{ content: ''; display: block; width: 200px;	height: 100px;
			background-color: aliceblue; position: absolute; top: calc(50vh - 50px);
			left: calc(50vw - 100px); border-radius: 40px; z-index: -1;
			background-image: linear-gradient(90deg, #6979F8, #00C48C, #FF647C, #6979F8);
			background-size: 400%; filter: blur(40px); opacity: 1; transition: opacity .5s linear;
			animation: animacao 5s linear infinite;
		}
		footer > a:hover{	animation: animacao 5s linear infinite;	}

		@keyframes animacao{
			from{ background-position: 0%;	}
			to{	background-position: 400%;  }
		}
	</style>    
	
		<!-- Header MENU button  ===========-->
		<?php include 'includes/header.php'; ?>
		
		<!-- Nav OPÇÕES ================ -->
		<?php include 'includes/nav.php'; ?>
			
		<!-- Banner ===============================-->
		<?php include 'includes/section-banner.php'; ?>	
		
		<!-- One Category =======================-->
		<?php include 'includes/section-one.php'; ?>
		
        <!-- Three Sobre Nós ============================-->
		<?php //include 'includes/section-three-sobre.php'; ?>
	
		<!-- Cadastro Email ============= ====-->
		<?php include 'includes/cadastroemail.php'; ?>

		<!--Two Opção para Eviar Message= -->
		<?php include 'includes/section-two-message.php'; ?>

		
		<!-- Footer ========================-->
		<?php include 'includes/footer.php'; ?>	
		
		<!--============= JS ================-->
		<?php Classes\ClassLayout::setFooter()?>
			
			

