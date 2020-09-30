<?php \Classes\ClassLayout::setHead('Cadastro de Usuário','Realize seu cadastro em nosso sistema.'); ?>

     <!--<div class="topFaixa float w100 center">Cadastro de Usuário</div>
   Retorno Ajax-->
     <!--<div class="retornoCad"></div>
   Formulário de Cadastro de Usuário Voluntário
    <form method="post" action="" >
        <div class="cadastro float center">
        
            <input class="float w100 h40" type="text" id="nome" name="nome" placeholder="Nome:" required>
            <input class="float w100 h40" type="email" id="email" name="email" placeholder="Email:" required>

            <input class="float w100 h40" type="text" id="contato" name="contato" placeholder="Contato DDxxxxxxxxx (opcional)"> 
            <input class="float w100 h40" type="text" id="cidade" name="cidade" placeholder="Cidade:" required>
            
            <input class="float w100 h40" type="text" id="bairro" name="bairro" placeholder="Bairro:" required>

            <input class="float w100 h40" type="password" id="senha" name="senha" placeholder="Senha:" required>
            <input class="float w100 h40" type="password" id="senhaConf" name="senhaConf" placeholder="Confirmação da Senha:" required>
            
           GOOGLE RECAPTCHA  <input class="float w100 h40" type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" required>
            
            <input class="inlineBlock h40" type="submit" value="Cadastrar">
        </div>
    </form>-->


<div style="width: 50%;  clear: none; margin: 3em 3em 0 25%;">
    <h3>Cadastre-se e começe a fazer a diferença!</h3>
      <!-- Form -->
    <form method="post" name="formCadastro" id="formCadastro" action="<?php echo DIRPAGE.'controllers/controllerCadastro'; ?>">
        <div class="row uniform">
            <div class="6u 12u$(xsmall)">
                <input type="text" name="name" id="name" placeholder="Nome"/></div>
                
            <div class="6u$ 12u$(xsmall)">
                <input type="email" name="email" id="email" placeholder="Email:" required=""/></div>

            <div class="6u 12u$(xsmall)">
                <input type="password" id="senha" name="senha" placeholder="Senha:" required=""/></div>

            <div class="6u 12u$(xsmall)">
                <input type="password" id="senhaConf" name="senhaConf" placeholder="Confirmação da Senha:" required=""/></div>
            
            <!-- Break -->
            <div class="12u$">
                <ul class="actions">
                    <li><input type="submit" value="Cadastrar" /></li>
                    <li><input type="reset" value="Reset" class="alt" /></li>
                </ul>
            </div>
        </div>
    </form>
</div>

   
<?php //\Classes\ClassLayout::setFooter(); ?>