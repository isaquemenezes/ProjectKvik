<?php \Classes\ClassLayout::setHead('Recupere sua senha','Recupere sua senha para fazer o login, novamente'); ?>
    <!--login
        class='wrapper style1'  = lilas
        class='wrapper style2'  = branco berge
        class='wrapper style3'  = Black    
    -->
    
        <section  class="wrapper style2">
			<div class="inner">

				<header class="align-center">
                    <img src="<?php echo DIRIMG.'logo_kvik.png'; ?>" alt="Logomarca da Kvik">
						<h2>Você receberá um link para resert sua Senha. </h2>		
				</header>

                <div style="width: 50%;  clear: none; margin: 3em 3em 0 38%;">
                     
                     <!--- Ajax Login e CapsLock --->
                     <div class="retornoSen"></div>          

                    <form name="formSenha" id="formSenha" action="<?php echo DIRPAGE.'controllers/controllerSenha'; ?>" method="post">
        
                        <div class="6u$ 12u$(xsmall)">
                            <input type="email" name="email" id="email" placeholder="Email" autofocus require></div><br>                     
                        
                        <!-- submit -->
                        <div class="12u$">
                            <ul class="actions">
                                <li><input type='submit' value='Reset' class='alt'></li>
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