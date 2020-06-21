<?php \Classes\ClassLayout::setHead('Cadastro de Usuário','Realize seu cadastro em nosso sistema.'); ?>

<div class="topFaixa float w100 center">Cadastro de Usuário</div>

<div class="retornoCad"></div>

<form name="formCadastro" id="formCadastro" action="<?php echo DIRPAGE.'controllers/controllerCadastro'; ?>" method="post">
    <div class="cadastro float center">
      
        <input class="float w100 h40" type="text" id="nome" name="nome" placeholder="Nome:" required>
        <input class="float w100 h40" type="email" id="email" name="email" placeholder="Email:" required>

        <input class="float w100 h40" type="text" id="contato" name="contato" placeholder="Contato DDxxxxxxxxx (opcional)"> 
        <input class="float w100 h40" type="text" id="cidade" name="cidade" placeholder="Cidade:" required>
        
        <input class="float w100 h40" type="text" id="bairro" name="bairro" placeholder="Bairro:" required>

        <input class="float w100 h40" type="password" id="senha" name="senha" placeholder="Senha:" required>
        <input class="float w100 h40" type="password" id="senhaConf" name="senhaConf" placeholder="Confirmação da Senha:" required>
        
        <!-- GOOGLE RECAPTCHA
        <input class="float w100 h40" type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" required>
        -->
        
        <input class="inlineBlock h40" type="submit" value="Cadastrar">
    </div>
</form>

<?php \Classes\ClassLayout::setFooter(); ?>