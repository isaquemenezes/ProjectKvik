<?php \Classes\ClassLayout::setHead('Redefina sua senha','Crie sua nova senha para fazer o login'); ?>
    <!--login
        class='wrapper style1'  = lilas
        class='wrapper style2'  = branco berge
        class='wrapper style3'  = Black    
    -->
    
        <section  class="wrapper style2">
			<div class="inner">
				<header class="align-center">
                    <img src="<?php echo DIRIMG.'logo_kvik.png'; ?>" alt="Logomarca da Kvik">
						<h2>Crie Uma Nova Senha</h2>		
				</header>

                <div style="width: 50%;  clear: none; margin: 3em 3em 0 38%;">
                     
                     <!--- Ajax Login e CapsLock --->
                     <div class="retornoRedSenha"></div>                    
                    
                    <form name="formRedSenha" id="formRedSenha" action="<?php echo DIRPAGE.'controllers/controllerConfirmacaoSenha'; ?>" method="post">
        
                        <div class="6u$ 12u$(xsmall)">
                            <input type="email" id="email" name="email" value="<?php echo \Traits\TraitParseUrl::parseUrl(1); ?>"  required>
                        </div><br>                     

                        <div class="6u$ 12u$(xsmall)">
                            <input  type="text" id="token" name="token" value="<?php echo \Traits\TraitParseUrl::parseUrl(2); ?>"  required>
                        </div><br>                     

                        <div class="6u$ 12u$(xsmall)">
                            <input type="password" id="senha" name="senha" placeholder="Senha:" required>
                        </div><br>                     

                        <div class="6u$ 12u$(xsmall)">
                            <input type="password" id="senhaConf" name="senhaConf" placeholder="Confirmação da Senha:" required>
                        </div><br>                     
                        
                        <!-- submit -->
                        <div class="12u$">
                            <ul class="actions">
                                <li><input type='submit' value='Rese' class='alt'></li>
                            </ul>
                        </div>

                        <div class="12u$">
                            <ul class="actions">
                                <li><a href="<?php echo DIRPAGE.''; ?>">Home</a></li>
                                <li><a href="<?php echo DIRPAGE.'cadastro'; ?>">Nova Conta</a></li>
                            </ul>
                        </div> 
                                               
                    </form>    
                </div>
			</div>
		</section>

    <!--========== script JS ===============-->
    <script src="<?php echo DIRJS.'jquery.min.js';?>"></script>
    <script src="<?php echo DIRJS.'javascript.js';?>"></script>
    </body>
</html>