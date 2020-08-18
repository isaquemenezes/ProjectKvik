<?php
    namespace Models;

    \Classes\ClassLayout::setHeadRestrito();    
    \Classes\ClassLayout::setHead(strtoupper($_SESSION['name']).' Minha Conta','Área Gerencie Sua Conta!'); 
    include "./includes/header.php";

    /*Update de Dados de Usuário Volunteer*/
    if(isset($_GET['id'])){
        $Acao="Editar";

        $crud=new ModelCrud();
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
            <form action="<?php echo DIRPAGE."controllers/controllerEditarPerfil"; ?>" name="formCadastro" id="formCadastro" method="post">
                
                <input type="hidden" id="Acao" name="Acao" value="<?php echo  $Acao; ?>">
                <input type="hidden" id="Id" name="Id" value="<?php echo $Id; ?>">
            
                <div class="formularioInput">Nome:<input type="text" id="nome" name="nome" value="<?php echo $nome; ?>"></div>
            
                <div class="formularioInput">Email:<input type="email" id="email" name="email" value="<?php echo $email; ?>"></div>

                <div class="formularioInput">Contato:<input type="text" id="contato" name="contato" value="<?php echo $contato;?>"></div>
                        
                <div class="formularioInput">Cidade:<input type="text" id="cidade" name="cidade" value="<?php echo $cidade; ?>"></div>

                <div class="formularioInput">Bairro:<input type="text" id="bairro" name="bairro" value="<?php echo $bairro; ?>"></div>
            
                <div class="formularioInput formularioInput100 center"><input type="submit" value="<?php echo $Acao; ?>"></div> 
            </form>    
    </div>
