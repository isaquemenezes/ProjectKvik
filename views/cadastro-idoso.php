<?php 
    namespace Models;

    \Classes\ClassLayout::setHeadRestrito();   
    \Classes\ClassLayout::setHead('Cadastro de Idoso','Cadastre uma Pessoa Idosa.');


    //Update de Dados do DB users_idoso
    if(isset($_GET['id'])){
        $Acao="Editar";

        $crud=new ModelCrud();
        $BFetch=$crud->selectDB(
                        "*",
                        "users_idoso",
                        "where idIdoso=?",
                        array(
                            $_GET['id']
                        )
                    );
        
        $Fetch=$BFetch->fetch(\PDO::FETCH_ASSOC);
        
        $id           =$Fetch['idIdoso'];
        $email        =$Fetch['email'];
        $nome         =$Fetch['nome'];
        $sexo         =$Fetch['sexo'];
        $cidade       =$Fetch['cidade'];        
        $bairro       =$Fetch['bairro'];
        $categoria    =$Fetch['categoria'];  
        $ead          =$Fetch['ead'];
        $contato      =$Fetch['contato'];
        $anoNascimento=$Fetch['anoNascimento'];
    }
    #Cadastro Novo
    else{
        $Acao="Cadastrar";

        $id=$_SESSION["id_users"];
        $nome="";
        $email="";
        $sexo="";
        $anoNascimento="";
        $contato=$_SESSION["contato"];      
        $cidade=$_SESSION["cidade"];
        $bairro=$_SESSION["bairro"];
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
        <input type="hidden" id="Acao" name="Acao" value="<?php echo  $Acao; ?>">
        <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">

        <label class="float">Email do responsável:</label>
        <input class="float w100 h40" text="email" readonly="readonly" id="email" name="email" value="<?php echo $_SESSION['email']; ?>" >

        <label style="margin: 20px 0px 0px 0px; float:left; color:blue;">Nome da Pessoa a ser atendida:</label>
        <input class="float w100 h40" type="text" id="nome" name="nome" value="<?php echo $nome; ?>" required>
        
        <label style="margin: 20px 0px 0px 0px; float:left; color:blue;">Sexo:</label>
        <select class="float w100 h40" name="sexo" id="sexo">
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
        </select>

        <label style="margin: 20px 0px 0px 0px; float:left; color:blue;">Cidade:</label>
        <input class="float w100 h40" type="text" id="cidade" name="cidade" value="<?php echo $cidade; ?>" required>
        
        <label style="margin: 20px 0px 0px 0px; float:left; color:blue;">Bairro:</label>    
        <input class="float w100 h40" type="text" id="bairro" name="bairro" value="<?php echo $bairro; ?>" required>
        
        <label style="margin: 20px 0px 0px 0px; float:left; color:blue;">Categoria:</label>
        <select class="float w100 h40" name="categoria" id="categoria" required>
            <option value="Educacao Financeira">Educação Financeira</option>
            <option value="Educacao Tecnologica">Educação Tecnológica</option>
            <option value="Combate ao Isolamento">Combate ao Isolamento</option>
        </select>

        <label style="margin: 20px 0px 0px 0px; float:left; color:blue;">Tem condição de ser atendido à distância?</label>
        <select class="float w100 h40" name="ead" id="ead" required>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
        </select>

        <label style="margin: 20px 0px 0px 0px; float:left; color:blue;">Contato da Pessoa Responsável:</label>
        <input class="float w100 h40" type="fone" id="contato" name="contato" value="<?php echo $contato; ?>" required>

        <label style="margin: 20px 0px 0px 0px; float:left; color:blue;">Ano de Nascimento(4dígitos)</label>
        <input class="float w100 h40" type="text" id="anoNascimento" name="anoNascimento" value="<?php echo $anoNascimento; ?>" required> 

        <input type="submit" value="<?php echo $Acao; ?>">
        
    </div>
</form>

<?php //\Classes\ClassLayout::setFooter(); ?>

