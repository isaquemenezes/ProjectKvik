<?php 
    \Classes\ClassLayout::setHeadRestrito(); // Inicia a Sessão  
    \Classes\ClassLayout::setHead('Cadastro de Idoso','Cadastre uma Pessoa Idosa.');

    include ("{$_SERVER['DOCUMENT_ROOT']}/ProjectKvik/PDO/classes/ClassCrud.php"); //Caminho Absoluto  

    /*Update de Dados*/
    if(isset($_GET['id'])){
        $Acao="Editar";

        $crud=new ClassCrud();
        $BFetch=$crud->selectDB(
                        "*",
                        "users_idoso",
                        "where id=?",
                        array(
                            $_GET['id']
                        ));
        
        $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
        
        $id           =$Fetch['idIdoso'];
        $email        =$_SESSION['email'];
        $nome         =$Fetch['nome'];
        $sexo         =$Fetch['sexo'];
        $anoNascimento=$Fetch['anoNascimento'];
        $contato      =$Fetch['contato'];        
        $cidade       =$Fetch['cidade'];
        $bairro       =$Fetch['bairro'];
        $categoria    =$Fetch['categoria'];  
        $ead          =$Fetch['ead'];
    }
    /*Cadastro Novo*/
    else{
        $Acao="Cadastrar";
        $id=0;
        $nome="";
        $email="";
        $sexo="";
        $anoNascimento="";
        $contato="";      
        $cidade="";
        $bairro="";
        $categoria="";
        $ead="";
    }
?>



<div class="topFaixa float w100 center">Cadastro de Idoso</div>
<!--Retorno Ajax-->
<div class="retornoCad"></div>
<!--Formulário de Cadastro de Idoso-->
<form name="formCadastro" id="formCadastro" action="<?php echo DIRPAGE.'PDO/controllers/controllerCadastroIdoso'; ?>" method="post">
    <div class="cadastro float center">
        <input type="text" id="Acao" name="Acao" value="<?php echo  $Acao; ?>">
        <input type="text" id="id" name="id" value="<?php echo $id; ?>">

        <label class="float">Email do responsável legal:</label>
        <input class="float w100 h40" text="email" readonly="readonly" id="email" name="email" value="<?php echo $_SESSION['email']; ?>" >

        <label class="float">Nome do Idoso:</label>
        <input class="float w100 h40" type="text" id="nome" name="nome" value="<?php echo $nome; ?>" required>
        
        <select class="float w100 h40" name="sexo" id="sexo">
            <option value="<?php  echo $sexo; ?>"><?php  echo $sexo; ?></option>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
        </select>

        <label class="float">Cidade:</label>
        <input class="float w100 h40" type="text" id="cidade" name="cidade" value="<?php echo $cidade; ?>" required>
        
        <label class="float">Bairro:</label>    
        <input class="float w100 h40" type="text" id="bairro" name="bairro" value="<?php echo $bairro; ?>" required>

        <select class="float w100 h40" name="categoria" id="categoria" required>
            <option value="">Quero Ajuda</option>
            <option value="Educacao Financeira">Educação Financeira</option>
            <option value="Educacao Tecnologica">Educação Tecnológica</option>
            <option value="Combate ao Isolamento">Combate ao Isolamento</option>
        </select>

        <select class="float w100 h40" name="ead" id="ead" required>
            <option value="<?php  echo $ead; ?>"><?php  echo $ead; ?></option>
            <option value="sim">Sim - Tenho condição de ser atendido à distância</option>
            <option value="nao">Não</option>
        </select>

        <label class="float">Contato da Pessoa Responsável Legal, parente, ou pessoa próxima:</label>
        <input class="float w100 h40" type="fone" id="contato" name="contato" value="<?php echo $contato; ?>" required>

        <label class="float">Ano de Nascimento(4dígitos)</label>
        <input class="float w100 h40" type="fone" id="anoNascimento" name="anoNascimento" value="<?php echo $anoNascimento; ?>" required> 

        <input type="submit" value="<?php echo $Acao; ?>">
        
    </div>
</form>

<?php //\Classes\ClassLayout::setFooter(); ?>

