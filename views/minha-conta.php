<?php 
    \Classes\ClassLayout::setHeadRestrito();  // Inicia a Sessão 
    include ("{$_SERVER['DOCUMENT_ROOT']}/ProjectKvik/PDO/classes/ClassCrud.php");
    \Classes\ClassLayout::setHead3(strtoupper($_SESSION['name']).' Minha Conta',' Gerencie Sua Conta!'); 
    include ("{$_SERVER['DOCUMENT_ROOT']}/ProjectKvik/includes/header.php");
    
?>
    <div class="content"><strong>Gerencie Sua Conta</strong>
    <div class="profile_image"><img src="<?php echo DIRPAGE.'./assets/images/logo_kvik.png';?>" alt="<?php echo $_SESSION['name'];?>"></div>
        <table class="tabelaCrud">
           <tr>
                <td>Id</td>
                <td>Nome</td>
                <td>Email</td>   
                <td>Contato</td>
                <td>Cidade</td>
                <td>Bairro</td>
                <td>Ações</td>
           </tr>

            <tr>
                <td><?php echo $_SESSION['id_users'];?></td>     
                <td><?php echo $_SESSION['name'];?></td>                    
                <td><?php echo $_SESSION['email'];?></td>
                <td><?php echo $_SESSION['contato']; ?></td>
                <td><?php echo $_SESSION['cidade']; ?></td>
                <td><?php echo $_SESSION['bairro']; ?></td>
                <td>
                    <a href="<?php echo DIRPAGE."/PDO/editar-perfil?id={$_SESSION['id_users']}"; ?>">Editar</a>
                    <a class="excluir" href="<?php echo DIRPAGE."/PDO/controllers/controllerExcluirUser?id={$_SESSION['id_users']}"; ?>">Deletar Conta</a>
                </td>
            </tr>   
       </table>
    </div>

     <!--======== DB cadastro idoso - PROFILE ========-->
     <div class="content"><strong>Seus Assistidos - idosos</strong>     
     
       <table class="tabelaCrud">
           <tr>
               <td>Nome</td>
               <td>Sexo</td>
               <td>Ano</td>
               <td>Contato</td>
               <td>Cidade</td>
               <td>Bairro</td>
               <td>Categoria</td>
               <td>EAD</td>
               <td>Ações</td>
           </tr>
    
            <?php       
                $crud=new ClassCrud();
                $results1=$crud->selectDB("*","users","", array());
                // if - Precisa Ser Revisado
                if($results1->fetch(PDO::FETCH_ASSOC)){
                    $email_user = $_SESSION['email'];        
                    $results_cadastro=$crud->selectDB("*", "users_idoso","where email='$email_user'",array());   
                    $cadastro=$results_cadastro->fetch(PDO::FETCH_ASSOC); 
                }  
            ?> 

            <tr>    
                <td><?php echo $cadastro['nome']; ?></td>         
                <td><?php echo $cadastro['sexo']; ?></td>
                <td><?php echo $cadastro['anoNascimento']; ?></td>
                <td><?php echo $cadastro['contato']; ?></td>
                <td><?php echo $cadastro['cidade']; ?></td>
                <td><?php echo $cadastro['bairro']; ?></td>
                <td><?php echo $cadastro['categoria']; ?></td>
                <td><?php echo $cadastro['ead']; ?></td>
                <td>
                    <a href="<?php echo DIRPAGE."./views/cadastro-idoso"; ?>">Cadastrar</a>
                    <a href="<?php echo DIRPAGE."./PDO/editar-perfil-idoso?id={$cadastro['idIdoso']}"; ?>">Editar</a>
                    <a class="excluir" href="<?php echo DIRPAGE."/PDO/controllers/controllerExcluir?id={$cadastro['idIdoso']}"; ?>">Deletar</a>
                </td>
            </tr>              
        </table>
    </div>
    
    <?php include "{$_SERVER['DOCUMENT_ROOT']}/ProjectKvik/includes/footer.php"; ?>
    
    <!--======= FOOTER SCRIPTS =======-->
    <?php  \Classes\ClassLayout::setFooter();?>
