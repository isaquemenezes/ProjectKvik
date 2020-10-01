<?php \Classes\ClassLayout::setHeadSubPage('Login','Entre com seu email e senha'); ?>

    <!--login-->
    <div style="width: 50%;  clear: none; margin: 3em 3em 0 38%;">
        <div class="loginLogomarca float w100 center">
            <img src="<?php echo DIRIMG.'logo_kvik.png'; ?>" alt="Logomarca da Kvik"></div>
           
        
        <!-- Form -->
        <h3>Entre e Mova uma Vida.</h3>
                
        <!--Retorno javascript-->
        <!-- em fase de teste <div class="retornoLogin"></div>-->
        
        <!--- Ajax Login e CapsLock --->
        <div class="resultadoForm"></div>
        <form name="formLogin" id="formLogin" action="<?php echo DIRPAGE.'controllers/controllerLogin'; ?>" method="post" >
    
            <div class="row uniform">
                <div class="6u$ 12u$(xsmall)">
                    <input type="email" name="email" id="email" value="" placeholder="Email" autofocus require></div>
                
                <div class="6u 12u$(xsmall)">
                    <input type="password" name="senha" id="senha" placeholder="Senha:" required></div>
                        
                <!-- submit -->
                <div class="12u$">
                    <ul class="actions">
                        <li><input type="submit" value="Entrar" /></li>
                    </ul>
                </div>

                <div class="12u$">
                    <ul class="actions">
                        <li><a href="<?php echo DIRPAGE.'esqueci-minha-senha'; ?>">Esqueci minha senha</a></li>
                        <li><a href="<?php echo DIRPAGE.'cadastro'; ?>">Nova Conta</a></li>
                    </ul>
                </div>
                <h6><a href="#">Termo de uso</a> | <a href="#">Politica de Privacidade</a> | <a href="#">Termo de Voluntário</h6>

            </div>
        </form>
    </div>

<!--========== script JS ===============-->
<?php \Classes\ClassLayout::setFooter(); ?>