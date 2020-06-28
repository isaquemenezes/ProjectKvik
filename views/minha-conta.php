<?php 
    \Classes\ClassLayout::setHeadRestrito();  // Inicia a Sessão 
    \Classes\ClassLayout::setHead3(strtoupper($_SESSION['name']).' Minha Conta','Área Gerencie Sua Conta!'); 
    include ("{$_SERVER['DOCUMENT_ROOT']}/ProjectKvik/includes/header.php");
    
?>
    <div class="content">
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
    
    <?php include "{$_SERVER['DOCUMENT_ROOT']}/ProjectKvik/includes/footer.php"; ?>
    
    <!--======= FOOTER SCRIPTS =======-->
    <?php  \Classes\ClassLayout::setFooter();?>
