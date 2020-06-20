<?php
    //include '../classes/ClassCrud.php';  
    include ("{$_SERVER['DOCUMENT_ROOT']}/ProjectCrud/classes/ClassCrud.php"); //Caminho Absoluto  

    /*Update de Dados*/
    if(isset($_GET['id'])){
        $Acao="Editar";

        $crud=new ClassCrud();
        $BFetch=$crud->selectDB(
            "*",
            "usuarios",
            "where id=?",
            array(
                $_GET['id']
            )
        );
        
        $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
        $Id=$Fetch['id'];
        $nome=$Fetch['nome'];
        $sexo=$Fetch['sexo'];
        $cidade=$Fetch['cidade'];

 
    }

    /*Cadastro Novo*/
    else{
        $Acao="Cadastrar";
        $Id=0;
        $nome="";
        $sexo="";
        $cidade="";
    }
?>


<div class="resultado"></div>

        <div class="formulario">
            <h1 class="center">Cadastro</h1>

            <form action="./controllers/controllerCadastro.php" name="formCadastro" id="formCadastro" method="post">
                
                <input type="hidden" id="Acao" name="Acao" value="<?php echo $Acao; ?>">
                <input type="hidden" id="Id" name="Id" value="<?php echo $Id; ?>">
            
                <div class="formularioInput">
                    Nome:<br>
                    <input type="text" id="nome" name="nome" value="<?php echo $nome; ?>">
                </div>

                 <div class="formularioInput">
                    email:<br>
                    <input type="email" id="email" name="email" value="<?php echo $email; ?>">
                </div>
                

               

                <div class="formularioInput formularioInput100 center">
                    <input type="submit" value="<?php echo $Acao; ?>">
                </div> 
            </form>    
        </div>




