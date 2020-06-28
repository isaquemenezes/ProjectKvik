<?php
    \Classes\ClassLayout::setHeadRestrito();  // Inicia a Sessão 
    include ("{$_SERVER['DOCUMENT_ROOT']}/ProjectKvik/PDO/classes/ClassCrud.php"); //Caminho Absoluto 
    Classes\ClassLayout::setHead3(strtoupper($_SESSION['name']).' Minha Conta','Área Gerencie Sua Conta!'); 
    include ("{$_SERVER['DOCUMENT_ROOT']}/ProjectKvik/includes/header.php");

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
        
        $Id     =$_SESSION['id_users'];
        $nome   =$_SESSION['name'];
        $email  =$_SESSION['email'];
        $contato=$_SESSION['contato'];
        $cidade =$_SESSION['cidade'];
        $bairro =$_SESSION['bairro'];
    }

?>
    <!--Retorno Ajax-->
    <div class="resultado"></div>
    <!--Formulário de edicao de perfil para usuário voluntário-->
    <div class="formulario">
        <h1 class="center">Faça Sua Atualização de Perfil</h1>
            <form action="<?php echo DIRPAGE."PDO/controllers/controllerEditarPerfil"; ?>" name="formCadastro" id="formCadastro" method="post">
                
                <input type="text" id="Acao" name="Acao" value="<?php echo  $Acao; ?>">
                <input type="text" id="Id" name="Id" value="<?php echo $Id; ?>">
            
                <div class="formularioInput">Nome:<input type="text" id="nome" name="nome" value="<?php echo $nome; ?>"></div>
            
                <div class="formularioInput">Email:<input type="email" id="email" name="email" value="<?php echo $email; ?>"></div>

                <div class="formularioInput">Contato:<input type="text" id="contato" name="contato" value="<?php echo $contato;?>"></div>
                        
                <div class="formularioInput">Cidade:<input type="text" id="cidade" name="cidade" value="<?php echo $cidade; ?>"></div>

                <div class="formularioInput">Bairro:<input type="text" id="bairro" name="bairro" value="<?php echo $bairro; ?>"></div>
            
                <div class="formularioInput formularioInput100 center"><input type="submit" value="<?php echo $Acao; ?>"></div> 
            </form>    
    </div>