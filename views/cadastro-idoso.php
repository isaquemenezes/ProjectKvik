<?php 
    namespace Models;

    \Classes\ClassLayout::setHeadRestrito();   
    \Classes\ClassLayout::setHeadSubPage('Cadastro de Idoso','Cadastre uma Pessoa Idosa.');

    $id_users=$_SESSION["id_users"];    
    //Update de Dados do DB users_idoso
    if(isset($_GET['id'])){
        $id_users2=$_GET['id'];
        $Acao="Editar";

        $crud=new ModelCrud();
        $select_idoso=$crud->selectDB("*","users_idoso", "WHERE id=?", array($id_users2));
        $idosos=$select_idoso->fetch(\PDO::FETCH_ASSOC);
        
        $id           =$idosos['id'];
        $fk_users     =$idosos['fk_users'];
        $nome         =$idosos['nome'];
        $sexo         =$idosos['sexo'];
        $cidade       =$idosos['cidade'];        
        $bairro       =$idosos['bairro'];
        $categoria    =$idosos['categoria'];  
        $Aa          =$idosos['ead'];
        $anoNascimento=$idosos['anoNascimento'];
    }
    #Cadastro Novo
    else{
        $Acao="Cadastrar";

        $id=0;
        $fk_users=$id_users;        
        //$fk_users="";
        $nome="";
        $email="";
        $sexo="";
        $anoNascimento="";
        $cidade="";
        $bairro="";
        $categoria="";
        $Aa="";
    }
   
?>

        <!-- Header ===================================-->
        <?php include './includes/subPages/header.php'; ?>
	    <!-- /Header ==================================-->	

        <!-- Nav ======================================= -->
	    <?php include './includes/subPages/nav-menu.php'; ?>
	    <!-- Nav /====================================== -->

        <!-- Section One =====================-->
		<section id="One" class="wrapper style3">
			<div class="inner">
				<header class="align-center"><img  style="margin: -2em;" src="<?php echo DIRIMG.'logo_kvik.png';?>" alt="logo kvik">	
					<p></p>
					<h2><?php echo  $Acao; ?></h2>
				</header>
			</div>
        </section> 
        <!-- /Section One =====================-->   

<!--Retorno Ajax-->
<div class="retornoCad"></div>
<!--Formulário de Cadastro de Idoso-->
    <div style="width: 50%;  clear: none; margin: 6em 3em 20em 25%;">
    <!-- Form -->
    <!--<h3>H3 vazio</h3>-->

<form name="formCadastro" id="formCadastr" action="<?php echo DIRPAGE.'controllers/controllerCadastroIdoso'; ?>" method="post" >
    <div class="row uniform">
        <input type="text" id="Acao" name="Acao" value="<?php echo  $Acao; ?>">
        <input type="text" id="id" name="id" value="<?php echo $id; ?>">
        <input type="text" id="fk_users" name="fk_users" value="<?php echo $fk_users; ?>">

        <div class="6u 12u$(xsmall)">
            <label for="">Nome </label>
            <input type="text" id="name" name="name" value="<?php echo $nome; ?>" placeholder="Nome ou apelido" required=""/></div>
        <!--<div class="6u$ 12u$(xsmall)">
        
        O atributo pattern nos permite definir expressões regulares de validação, sem Javascript. Veja um
exemplo de como validar CEP:
        
        
        pattern=”\d{5}-?\d{3}”
            <input type="email" name="email" id="email" value="" placeholder="Email" /></div>-->
        
        <!-- Break -->
        <div class="12u$">
            <div class="select-wrapper">
            <label for="">Categoria</label>
                <select name="categoria" id="categoria">
                    <option value="<?php echo $categoria; ?>"><?php echo $categoria; ?></option>
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
            <label for="">Sexo</label>
                <select name="sexo" id="sexo">
                    <option value="<?php echo $sexo; ?>"><?php echo $sexo; ?></option>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                </select>
            </div>
        </div>
          <!-- Break -->
          <div class="12u$">
            <div class="select-wrapper">
            <label for="">Pode ser atendido á distância</label>
                <select name="aa" id="aa">
                    <option value="<?php echo $Aa; ?>"><?php echo $Aa; ?></option>
                    <option value="sim">SIM</option>
                    <option value="nao">NÂO</option>
                </select>
            </div>
        </div>

        <!-- Break 
        <div class="4u 12u$(small)"><label>Pode ser à distância?</label></div>
		
        <div class="4u 12u$(small)">
			<input type="radio" id="priority-normal" name="priority">
			<label for="priority-normal">Não</label>
		</div>
		
        <div class="4u$ 12u$(small)">
			<input type="radio" id="priority-high" name="priority">
			<label for="priority-high">Sim</label>
		</div>-->

        <div class="6u 12u$(xsmall)">
        <label for="">Cidade</label>
            <input type="text" id="cidade" name="cidade" value="<?php echo $cidade; ?>" placeholder="Cidade" required></div>
        
        <div class="6u 12u$(xsmall)">
        <label for="">Bairro</label>
            <input type="text" id="bairro" name="bairro" value="<?php echo $bairro; ?>" placeholder="Bairro" required></div>
            
        <div class="6u 12u$(xsmall)">
        <label for="">Ano de Nascimento</label>
            <input class="float w100 h40" type="text" id="anoNascimento" name="anoNascimento" value="<?php echo $anoNascimento; ?>" placeholder="Ano de Nascimento 4dígitos (Opcional)"></div> 

        <!-- message 
        <div class="12u$">
            <textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea></div>
        -->
        <!-- submit -->
        <div class="12u$">
            <ul class="actions">
                <li><input type="submit" value="<?php echo $Acao;?>" /></li>
                <li><input type="reset" value="Reset" class="alt" /></li>
            </ul>
        </div>
    </div>
    
</form><h6>Lembre-se que você deve ser o responsável, ou ter autorização, para cadastrar a pessoa. Qualquer dúvida, leia nossos termos.</h6>
<h6><a href="#">Termo de uso</a> | <a href="#">Politica de Privacidade</a> | <a href="#">Termo de Voluntário</h6>

</div>


<script src="<?php echo DIRJS.'vanilla.js'; ?>"></script>
   

<?php include './includes/footer.php';?>
<?php \Classes\ClassLayout::setFooter(); ?>

