<?php \Classes\ClassLayout::setHead('Login','Entre com seu email e senha'); ?>
    <!--login
        class='wrapper style1'  = lilas
        class='wrapper style2'  = branco berge
        class='wrapper style3'  = Black    
    -->
    
        <section  class="wrapper style2">
			<div class="inner">

				<header class="align-center">
                    <a href="<?php echo DIRPAGE.'';?>"><img src="<?php echo DIRIMG.'logo_kvik.png'; ?>" alt="Logomarca da Kvik"></a>
						<p class="special">Você pode fazer diferença no mundo.</p>
						<!--<h2>Entre e Mova Uma Vida</h2>-->		
				</header>

                <div style="width: 50%;  clear: none; margin: 3em 3em 0 38%;">
                    
                     <!--- Ajax Login e CapsLock --->
                    <div class="resultadoForm"></div>
                    
                    <form name="formLogin" id="formLogin" action="<?php echo DIRPAGE.'controllers/controllerLogin'; ?>" method="post" >
        
                        <div class="6u$ 12u$(xsmall)">
                            <input type="email" name="email" id="email" placeholder="Email" autofocus require></div>
                        <br>
                        <div class="6u 12u$(xsmall)">
                            <input type="password" name="senha" id="senha" placeholder="Senha:" required></div>
                        <br>
                        
                        <!-- submit -->
                        <div class="12u$">
                            <ul class="actions">
                                <li><input type="submit" value="Entrar" /></li>
                            </ul>
                        </div>

                        <div class="12u$">
                            <ul class="actions">
                                <li><a href="<?php echo DIRPAGEP.'esqueci-minha-senha'; ?>">Esqueci minha senha</a></li>
                                <li><a href="<?php echo DIRPAGEP.'cadastro'; ?>">Nova Conta</a></li>
                            </ul>
                        </div>
                        <h6><a href="<?php echo DIRPAGE.'article/termo-de-uso';?>" target="_blank">Termo de uso</a> | <a href="<?php echo DIRPAGE.'article/politica-de-privacidade';?>" target="_blank">Politica de Privacidade</a> | <a href="<?php echo DIRPAGE.'article/termo-de-voluntariado';?>" target="_blank">Termo de Voluntário</h6>
                    </form> 
                       
                </div>
			</div>
		</section>

    <!--========== script JS ===============-->
    <script src="<?php echo DIRJS.'jquery.min.js';?>"></script>
    <script src="<?php echo DIRJS.'javascript.js';?>"></script>
    </body>
</html>