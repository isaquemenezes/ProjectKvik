<?php \Classes\ClassLayout::setHeadRestrito(); // Inicia a Sessão  ?>
<?php \Classes\ClassLayout::setHead('Cadastro de Idoso','Cadastre uma Pessoa Idosa.');?>

<div class="topFaixa float w100 center">Cadastro de Idoso</div>

<div class="retornoCad"></div>

<form name="formCadastro" id="formCadastro" action="<?php echo DIRPAGE.'controllers/controllerCadastroIdoso'; ?>" method="post">
    <div class="cadastro float center">

        <label class="float">Email do responsável legal:</label>
        <input class="float w100 h40" text="email" readonly="readonly" id="email" name="email" value="<?php echo $_SESSION['email']; ?>" >

        <label class="float">Nome do Idoso:</label>
        <input class="float w100 h40" type="text" id="nome" name="nome" placeholder="Nome Completo" required>
        
        <select class="float w100 h40" name="sexo" id="sexo">
            <option value="">Sexo</option>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
        </select>

        <label class="float">Cidade:</label>
        <input class="float w100 h40" type="text" id="cidade" name="cidade" required>
        
        <label class="float">Bairro:</label>    
        <input class="float w100 h40" type="text" id="bairro" name="bairro" required>

        <select class="float w100 h40" name="categoria" id="categoria" required>
            <option value="">Quero Ajuda</option>
            <option value="educacaoFinanceira">Educação Financeira</option>
            <option value="educacaoTecnologica">Educação Tecnológica</option>
            <option value="combateIsolamento">Combate ao Isolamento</option>
        </select>

        <select class="float w100 h40" name="online" id="online" required>
            <option value="">Pode ser Feito Online</option>
            <option value="sim">Sim - Tenho condição de ser atendido à distância</option>
            <option value="nao">Não</option>
        </select>
        <label class="float">Contato da Pessoa Responsável Legal ,parente,ou pessoa próxima:</label>
        <input class="float w100 h40" type="fone" id="contato" name="contato" placeholder="Contato:" required>

        <label class="float">Ano de Nascimento(somente números)</label>
        <input class="float w100 h40" type="fone" id="anoNascimento" name="anoNascimento" placeholder="4 Dígitos " required>

              

        <input class="inlineBlock h40" type="submit" value="Cadastrar">
        
    </div>
</form>

<?php \Classes\ClassLayout::setFooter(); ?>

