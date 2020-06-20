<?php
    include ("{$_SERVER['DOCUMENT_ROOT']}/PDO/classes/ClassCrud.php"); //Caminho Absoluto  

    /*Update de Dados*/
    if(isset($_GET['id'])){
        $Acao="Editar";

        $crud=new ClassCrud();
        $BFetch=$crud->selectDB(
            "*",
            "cad",
            "where id=?",
            array(
                $_GET['id']
            )
        );
        
        $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
        $id=$Fetch['id'];
        $nome=$Fetch['nome'];
        $anoNascimento=$Fetch['anoNascimento'];
        $sexo=$Fetch['sexo'];        
        $cidade=$Fetch['cidade'];
        $bairro=$Fetch['bairro'];
        $ead=$Fetch['ead'];

 
    }

    /*Cadastro Novo*/
    else{
        $Acao="Cadastrar";
        $id=0;
        $nome="";
        $anoNascimento="";
        $sexo="";      
        $cidade="";
        $bairro="";
        $ead="";
    }
?>

<div class="resultado"></div>
<div class="formulario">
    <h1 class="center">Cadastrar Uma Pessoa Idosa DB Separada!!!!!</h1>
        <form action="<?php DIRPAGE."controllers/controllerCadastroIdoso"; ?>" 
        name="formCadastroIdoso" id="formCadastroIdoso" method="post">
               
            <input type="text" id="Acao" name="Acao" value="<?php echo  $Acao; ?>">
            <input type="text" id="id" name="id" value="<?php echo $id; ?>">
           
            <div class="formularioInput">
                Nome:<br>
                <input type="text" id="nome" name="nome" value="<?php echo $nome; ?>">
            </div>

            <div class="formularioInput">
                AnoNascimento:<br>
                <input type="text" id="anoNascimento" name="anoNascimento" value="<?php echo $anoNascimento; ?>">
            </div>


            <div class="formularioInput">
                Sexo:<br>
                <select name="sexo" id="sexo">
                    <option value="<?php  echo $sexo; ?>"><?php  echo $sexo; ?></option>
                    <option value="feminino">Feminino</option>
                    <option value="masculino">Masculino</option>
                </select>                 
            </div>

            <div class="formularioInput">
                Cidade:<br>
                <input type="text" id="cidade" name="cidade" value="<?php echo $cidade; ?>">
            </div>

            <div class="formularioInput">
                Bairro:<br>
                <input type="text" id="bairro" name="bairro" value="<?php echo $bairro; ?>">
            </div>


            <div class="formularioInput">
                Online?:<br>
                <select type="text" name="ead" id="ead">
                    <option value="<?php  echo $ead; ?>"><?php  echo $ead; ?></option>
                    <option value="sim">Sim</option>
                    <option value="nao">Nao</option>
                </select>                 
            </div>


            <!--div class="formularioInput">
                Pode ser atendido Online?<br>
                <input type="radio" name="Radio" value="sim">SIM<br>
                <input type="radio" name="Radio" value="nao">NÂO<br>
            </div-->


            <div class="formularioInput formularioInput100 center">
                <input type="submit" value="<?php echo $Acao; ?>">
            </div> 
        </form>    
</div>
