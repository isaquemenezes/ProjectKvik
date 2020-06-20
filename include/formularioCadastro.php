<?php

    //include '../includes/models/ClassCrud.php';  
    //include ("{$_SERVER['DOCUMENT_ROOT']}/models/ClassCrud.php"); //Caminho Absoluto  

    /*Update de Dados*/
    if(isset($_GET['id'])){
        $Acao="Editar";

        $crud=new ClassCrud();
        $BFetch=$crud->selectDB(
            "*",
            "cadastro",
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
        $telefone="";
        $senha="";
        $cidade="";
        $bairro="";
    }
?>
<div class="resultado"></div>

        <div class="formulario">
            <h1 class="center">Cadastro</h1>

            <form action="<?php echo DIRPAGE.'models/ClassCadastro2.php';?>" name="formCadastro" id="formCadastro" method="post">
                
                <input type="hidden" id="Acao" name="Acao" value="<?php echo $Acao; ?>">
                <input type="hidden" id="Id" name="Id" value="<?php echo $Id; ?>">
            
                <div class="formularioInput">
                    Nome:<br>
                    <input type="text" id="nome" name="nome" value="<?php echo $nome; ?>">
                </div>

                <div class="formularioInput">
                    Sexo:<br>
                    <select name="sexo" id="sexo">
                    <option value="<?php echo $sexo; ?>"><?php echo $sexo; ?></option>
                        <option value="feminino">Feminino</option>
                        <option value="masculino">Masculino</option>
                    </select>                 
                </div>


                <div class="formularioInput">
                    Celular:<br>
                    <input type="text" id="telefone" name="telefone" value="<?php echo $telefone; ?>">
                </div>


                <div class="formularioInput">
                    Senha:<br>
                    <input type="password" id="senha" name="senha" value="<?php echo $senha; ?>">
                </div>

                

                <div class="formularioInput">
                    Cidade:<br>
                    <input type="text" id="cidade" name="cidade" value="<?php echo $cidade; ?>">
                </div>

                <div class="formularioInput">
                    Bairro:<br>
                    <input type="text" id="bairro" name="bairro" value="<?php echo $bairro; ?>">
                </div>

                <div class="formularioInput formularioInput100 center">
                    <input type="submit" value="<?php echo $Acao; ?>">
                </div> 
            </form>    
        </div>
