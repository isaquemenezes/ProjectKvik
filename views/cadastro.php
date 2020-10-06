<?php 
    \Classes\ClassLayout::setHeadSubPage('Cadastro de Usuário','Realize seu cadastro em nosso sistema.');
    include_once './includes/subPages/header.php';
    include_once './includes/nav.php';





?>

        <!-- Section One ======================-->
        <section id="One" class="wrapper style3">
			<div class="inner">
				<header class="align-center">
                    <img  style="margin: -2em;" src="<?php echo DIRIMG.'logo_kvik.png';?>" alt="logo kvik">	
					<p></p>
					<h2>Cadastre-se e começe a fazer a diferença</h2>
				</header>
			</div>
		</section><!-- Section One ========
        ========================================-->

        <div style="width: 50%;  clear: none; margin: 5em 3em 0 25%;">
            <!--<h3>Cadastre-se e começe a fazer a diferença!</h3>-->
            <div class="retornoCad"></div>
            <br><br>
            <!-- Form -->
            <form method="post" name="formCadastro" id="formCadastro" action="<?php echo DIRPAGE.'controllers/controllerCadastro'; ?>">
                <div class="row uniform">
                    <div class="6u 12u$(xsmall)">
                        <label for="">Nome </label>
                        <input type="text" name="name" id="name" placeholder="Nome"></div>
                        
                    <div class="6u$ 12u$(xsmall)">
                        <label for="">Email </label>
                        <input type="email" name="email" id="email" placeholder="Email:" required></div>

                    <!--<div class="6u 12u$(xsmall)">
                        <label for="">Contato </label>
                        <input type="text" id="contato" name="contato" placeholder="Contato"/></div>
                    
                    <div class="6u 12u$(xsmall)">
                        <label for="">Cidade</label>
                        <input type="text" id="cidade" name="cidade" placeholder="Cidade:"></div>
                    
                    <div class="6u 12u$(xsmall)">
                        <label for="">Bairro </label>
                        <input type="text" id="bairro" name="bairro" placeholder="Bairro:"></div>-->
                    
                    
                    <div class="6u 12u$(xsmall)">
                        <label for="">Senha</label>
                        <input type="password" id="senha" name="senha" placeholder="Senha:" required></div>

                    <div class="6u 12u$(xsmall)">
                        <label for="">Repita sua senha</label>
                        <input type="password" id="senhaConf" name="senhaConf" placeholder="Confirmação da Senha:" required></div>
                    
                    <!-- Break -->
                
                    <div class="12u$">
                        <ul class="actions">
                            <li><input type="submit" value="Cadastrar" /></li>
                            <li><input type="reset" value="Reset" class="alt" /></li>
                        </ul>
                    </div>
                    <br>
                    <br>
                    <h5>Ao click em Cadastrar, consideramos que você leu nossa politica de privacidade e concorda com a mesma.</h5>
                    <h6><a href="<?php echo DIRPAGE.'article/termo-de-uso';?>" target="_blank">Termo de uso</a> | <a href="<?php echo DIRPAGE.'article/politica-de-privacidade';?>" target="_blank">Politica de Privacidade</a> | <a href="<?php echo DIRPAGE.'article/termo-de-voluntariado';?>" target="_blank">Termo de Voluntário</h6>

                </div>
            </form>
        </div>

        
        <?php \Classes\ClassLayout::setFooter(); ?>