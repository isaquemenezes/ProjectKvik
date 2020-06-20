<?php
 include ("{$_SERVER['DOCUMENT_ROOT']}/PDO/classes/ClassCrud.php"); //Caminho Absoluto 

/*Update de Dados*/
    if(isset($_GET['id'])){
        $Acao="Editar";

        $crud=new ClassCrud();
        $BFetch=$crud->selectDB(
            "*",
            "users",
            "where id=?",
            array(
                $_GET['id']
            )
        );
        
        $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
        $Id=$Fetch['id'];
        $nome=$Fetch['nome'];
        $email=$Fetch['email'];
        //$contato=$Fetch['contato'];
        //$titulo=$Fetch['titulo'];
        //$cidade=$Fetch['cidade'];
        //$bairro=$Fetch['bairro'];

 
    }

    /*Cadastro Novo*/
    else{
        $Acao="Cadastrar";
        $Id=0;
        $nome="";
        $email="";
        //$contato="";
        //$titulo="";
        //$cidade="";
        //$bairro="";
    }
?>

<div class="resultado"></div>
<div class="formulario">
    <h1 class="center">Cadastro</h1>
        <form action="<?php echo DIRPAGE."PDO/controllers/controllerCadastro2"; ?>" name="formCadastro" id="formCadastro" method="post">
               
            <input type="text" id="Acao" name="Acao" value="<?php echo  $Acao; ?>">
            <input type="text" id="Id" name="Id" value="<?php echo $Id; ?>">
           
            <div class="formularioInput">
                Nome:<br>
                <input type="text" id="nome" name="nome" value="<?php echo $nome; ?>">
            </div>
           
            <div class="formularioInput">
                Email:<br>
                <input type="email" id="email" name="email" value="<?php echo $email; ?>">
            </div>

            <!--<div class="formularioInput">
                Contato:<br>
                <input type="text" id="contato" name="contato" value="<?php echo $contato; ?>">
            </div>


            <div class="formularioInput">
                titulo:<br>
                <input type="text" id="titulo" name="titulo" value="<?php echo $titulo; ?>">
            </div>

                       

            <div class="formularioInput">
                Cidade:<br>
                <input type="text" id="cidade" name="cidade" value="<?php echo $cidade; ?>">
            </div>

            <div class="formularioInput">
                Bairro:<br>
                <input type="text" id="bairro" name="bairro" value="<?php echo $bairro; ?>">
            </div>-->

           

            <div class="formularioInput formularioInput100 center">
                <input type="submit" value="<?php echo $Acao; ?>">
            </div> 
        </form>    
</div>
