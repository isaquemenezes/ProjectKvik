<?php 
    \Classes\ClassLayout::setHeadRestrito();  // Inicia a Sessão 
    \Classes\ClassLayout::setHead('Minha Conta','Área Gerencie Sua Conta!'); 
    include ("{$_SERVER['DOCUMENT_ROOT']}/ProjectKvik/includes/header.php");
    
?>
    <div class="content">
        <table class="tabelaCrud">
          
           <tr>
               <td>Nome</td>
               <td>Email</td>   
               <td>Contato</td>
               <td>Cidade</td>
               <td>Bairro</td>
               <td>Ações</td>
           </tr>

            <tr>   
                <td><?php echo $_SESSION['name'];?></td>                    
                <td><?php echo $_SESSION['email'];?></td>
                <td><?php //echo $_SESSION['contato']; ?></td>
                <td><?php echo $_SESSION['cidade']; ?></td>
                <td><?php echo $_SESSION['bairro']; ?></td>
                <td>
                    <a href="<?php echo DIRPAGE."/PDO/editar-perfil?id={$_SESSION['id']}"; ?>">Editar</a>
                    <a class="excluir" href="<?php echo DIRPAGE."/PDO/controllers/controllerExcluirUser?id={$_SESSION['id']}"; ?>">Deletar</a>
                </td>
                <td>
                    <a href="<?php echo "visualizar.php?id={$Fetch['id']}"; ?>">Visualizar</a><br>
                    <a href="<?php echo "cadastro.php?id={$Fetch['id']}"; ?>">Editar</a><br>
                    <a class="excluir" href="<?php echo "id={$Fetch['id']}"; ?>">Deletar</a><br>
                    <a href="<?php echo "cadastro.php?id={$Fetch['id']}"; ?>">Cadastrar</a><br>
                </td> 
                <td><a class="excluir" href="<?php echo "?id={$Fetch['id']}"; ?>">Central de Dúvidas</a></td>
                <td><a class="excluir" href="<?php echo "?id={$Fetch['id']}"; ?>">Excluir</a><br></td>
            </tr>   
       </table>






    </div>

    <?php include "{$_SERVER['DOCUMENT_ROOT']}/ProjectKvik/includes/footer.php"; ?>
    
