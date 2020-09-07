<?php 
    namespace Models;

    \Classes\ClassLayout::setHeadRestrito();   
    \Classes\ClassLayout::setHead('Cadastro de Idoso','Cadastre uma Pessoa Idosa.');

    $id_users=$_SESSION["id_users"];
    //Update de Dados do DB users_idoso
    if(isset($_GET['id'])){
        $Acao="Editar";

        $crud=new ModelCrud();
        $selectUsers_idoso=$crud->selectDB("*","users_idoso", "WHERE fk_users=?", array($id_users));
        $users_idoso=$selectUsers_idoso->fetch(\PDO::FETCH_ASSOC);
        
        $id           =$users_idoso['id'];
        $fk_users     =$users_idoso['fk_users'];
        $nome         =$users_idoso['nome'];
        $sexo         =$users_idoso['sexo'];
        $cidade       =$users_idoso['cidade'];        
        $bairro       =$users_idoso['bairro'];
        $categoria    =$users_idoso['categoria'];  
        $ead          =$users_idoso['ead'];
        $anoNascimento=$users_idoso['anoNascimento'];
    }
    #Cadastro Novo
    else{
        $Acao="Cadastrar";

        $id=0;
        $fk_users=$id_users;
        $nome="";
        $email="";
        $sexo="";
        $anoNascimento="";
        $cidade=$_SESSION["cidade"];
        $bairro="";
        $categoria="";
        $ead="";
    }
   
?>

<div class="topFaixa float w100 center">Cadastro de Idoso</div>
<!--Retorno Ajax-->
<div class="retornoCad"></div>
<!--Formulário de Cadastro de Idoso-->
<form name="formCadastro" id="formCadastro" action="<?php echo DIRPAGE.'./controllers/controllerCadastroIdoso'; ?>" method="post">
    <div class="cadastro float center">
        <input type="text" id="Acao" name="Acao" value="<?php echo  $Acao; ?>">
        <input type="text" id="id" name="id" value="<?php echo "id=".$id; ?>">
        <input type="text" id="fk_users" name="fk_users" value="<?php echo $fk_users; ?>">

        <label style="margin: 20px 0px 0px 0px; float:left; color:blue;">Nome da Pessoa a ser atendida:</label>
        <input class="float w100 h40" type="text" id="nome" name="nome" value="<?php echo $nome; ?>" required>
        
        <label style="margin: 20px 0px 0px 0px; float:left; color:blue;">Sexo:</label>
        <select class="float w100 h40" name="sexo" id="sexo">
            <option value="">Selecione</option>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
        </select>

        <label style="margin: 20px 0px 0px 0px; float:left; color:blue;">Cidade:</label>
        <input class="float w100 h40" type="text" id="cidade" name="cidade" value="<?php echo $cidade; ?>" required>
        
        <label style="margin: 20px 0px 0px 0px; float:left; color:blue;">Bairro:</label>    
        <input class="float w100 h40" type="text" id="bairro" name="bairro" value="<?php echo $bairro; ?>" required>
        
        <label style="margin: 20px 0px 0px 0px; float:left; color:blue;">Categoria:</label>
        <select class="float w100 h40" name="categoria" id="categoria" required>
            <option value="">Selecione</option>
            <option value="educacaoFinanceira">Educação Financeira</option>
            <option value="educacaoTecnologica">Educação Tecnológica</option>
            <option value="combateIsolamento">Combate ao Isolamento</option>
        </select>

        <label style="margin: 20px 0px 0px 0px; float:left; color:blue;">Tem condição de ser atendido à distância?</label>
        <select class="float w100 h40" name="ead" id="ead" required>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
        </select>

        <label style="margin: 20px 0px 0px 0px; float:left; color:blue;">Ano de Nascimento(4dígitos)</label>
        <input class="float w100 h40" type="text" id="anoNascimento" name="anoNascimento" value="<?php echo $anoNascimento; ?>" required> 

        <input type="submit" value="<?php echo $Acao; ?>">
        
    </div>
</form>

<?php //\Classes\ClassLayout::setFooter(); ?>

