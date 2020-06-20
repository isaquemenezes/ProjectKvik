<?php
   include ("{$_SERVER['DOCUMENT_ROOT']}/includes/header.php"); 
   
   \Classes\ClassLayout::setHeadRestrito();  // Inicia a Sessão 

   \Classes\ClassLayout::setHead('Minha Conta','Área Gerencie Sua Conta!'); 
?>

    <div class="content">
   
    

        <table class="tabelaCrud">
            <tr>
               <td>Perfil </td>                  
               <td>Meus Anúncios</td>
               <td>Dúvidas?</td>
               <td>Conta</td>
            </tr>
            <tr> 
                <td> 
                    <?php
                            echo "Nome:<br>";
                            echo "<p>".$_SESSION['name']." </p> <br>";

                            echo "Email:<br>"; 
                            echo "<p>".$_SESSION['email']." </p><br>";

                            echo "Permisão:<br>";
                            echo "<p>".$_SESSION['permition']." </p><br>";

                            echo "Status:<br>";
                            echo "<p>".$_SESSION["status"]."</p><br>";

                            echo "ID:<br>";
                            echo "<p>".$_SESSION["id"]."</p><br>";

                          
                    ?>
                    <hr>
                    <a href="<?php echo DIRPAGE."editar-cadastro?id={$_SESSION['id']}"; ?>">Editar Perfil</a>
                </td>

                <td>
                    <a href="<?php echo "visualizar.php?id={$Fetch['id']}"; ?>">Visualizar</a><br>
                    <a href="<?php echo "cadastro.php?id={$Fetch['id']}"; ?>">Editar</a><br>
                    <a class="excluir" href="<?php echo "id={$Fetch['id']}"; ?>">Deletar</a><br>
                    <a href="<?php echo "cadastro.php?id={$Fetch['id']}"; ?>">Cadastrar</a><br>
                </td>
                 
                <td>
                    <a class="excluir" href="<?php echo "?id={$Fetch['id']}"; ?>">Central de Dúvidas</a><br>
                </td>
                   
                <td>
                    <a class="excluir" href="<?php echo "?id={$Fetch['id']}"; ?>">Excluir</a><br>
                </td>
            </tr>     
        </table>
    </div>

    <?php include "{$_SERVER['DOCUMENT_ROOT']}/includes/footer.php"; ?>
    
