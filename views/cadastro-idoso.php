<?php 
    namespace Models;

    //\Classes\ClassLayout::setHeadRestrito();   
    \Classes\ClassLayout::setHead('Cadastro de Idoso','Cadastre uma Pessoa Idosa.');

    ////$id_users=$_SESSION["id_users"];
    //Update de Dados do DB users_idoso
    if(isset($_GET['id'])){
        $Acao="Editar";

        $crud=new ModelCrud();
        $select_idoso=$crud->selectDB("*","idosos", "WHERE id=?", array($_GET['id']));
        $idosos=$select_idoso->fetch(\PDO::FETCH_ASSOC);
        
        $id           =$idosos['id'];
        $fk_users     =$idosos['fk_users'];
        $nome         =$idosos['nome'];
        $sexo         =$idosos['sexo'];
        $cidade       =$idosos['cidade'];        
        $bairro       =$idosos['bairro'];
        $categoria    =$idosos['categoria'];  
        $ead          =$idosos['ead'];
        $anoNascimento=$idosos['anoNascimento'];
    }
    #Cadastro Novo
    else{
        $Acao="Cadastrar";

        $id=0;
        //$fk_users=$id_users;
        $nome="";
        $email="";
        $sexo="";
        $anoNascimento="";
       // $cidade=$_SESSION["cidade"];
        $bairro="";
        $categoria="";
        $ead="";
    }
   
?>

<!--Retorno Ajax-->
<div class="retornoCad"></div>
<!--Formulário de Cadastro de Idoso-->
    <div style="width: 50%;  clear: none; margin: 3em 3em 0 25%;">
    <!-- Form -->
    <h3>Cadastre Uma Pessoa Idosa*.</h3>

<form name="formCadastro" id="formCadastro" action="<?php echo DIRPAGE.'./controllers/controllerCadastroIdoso'; ?>" method="post" >
    <div class="row uniform">
        <input type="hidden" id="Acao" name="Acao" value="<?php echo  $Acao; ?>">
        <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
        <input type="hidden" id="fk_users" name="fk_users" value="<?php echo $fk_users; ?>">

        <div class="6u 12u$(xsmall)">
            <input type="text" id="nome" name="nome" value="<?php echo $nome; ?>" placeholder="Nome ou apelido" required=""/></div>
        <div class="6u$ 12u$(xsmall)">
            <input type="email" name="email" id="email" value="" placeholder="Email" /></div>
        
        <!-- Break -->
        <div class="12u$">
            <div class="select-wrapper">
                <select name="categoria" id="categoria">
                    <option value="">- Categoria -</option>
                    <option value="educacaofinanceira">Educação Financeira</option>
                    <option value="educacaotecnologica">Educação Tecnológica</option>
                    <option value="combateisolamento">Combate Ao Isolamento</option>
                    <option value="Outros">Outros</option>
                </select>
            </div>
        </div>


         <!-- Break -->
         <div class="12u$">
            <div class="select-wrapper">
                <select name="sexo" id="sexo">
                    <option value="">- Sexo -</option>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                </select>
            </div>
        </div>
          <!-- Break -->
          <div class="12u$">
            <div class="select-wrapper">
                <select name="on" id="on">
                    <option value="">- Pode ser à distância -</option>
                    <option value="sim">SIM</option>
                    <option value="nao">NÂO</option>
                </select>
            </div>
        </div>

        <!-- Break -->
        <div class="4u 12u$(small)"><label>Pode ser à distância?</label></div>
		
        <div class="4u 12u$(small)">
			<input type="radio" id="priority-normal" name="priority">
			<label for="priority-normal">Não</label>
		</div>
		
        <div class="4u$ 12u$(small)">
			<input type="radio" id="priority-high" name="priority">
			<label for="priority-high">Sim</label>
		</div>

        <div class="6u 12u$(xsmall)">
            <input type="text" id="cidade" name="cidade" value="<?php echo $cidade; ?>" placeholder="Cidade" required=""/></div>
        
        <div class="6u 12u$(xsmall)">
            <input type="text" id="bairro" name="bairro" value="<?php echo $bairro; ?>" placeholder="Bairro" required=""/></div>
            
        <div class="6u 12u$(xsmall)">
            <input class="float w100 h40" type="text" id="anoNascimento" name="anoNascimento" value="<?php echo $anoNascimento; ?>" placeholder="Ano de Nascimento 4dígitos (Opcional)"></div> 

        <!-- message -->
        <div class="12u$">
            <textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea></div>
        
        <!-- submit -->
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

