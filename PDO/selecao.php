<?php \Classes\ClassLayout::setHeadRestrito(); // Inicia a Sessão  ?>

<?php \Classes\ClassLayout::setHead2('Área Restrita','Área exclusiva para membros!'); ?>

<?php
    include ("{$_SERVER['DOCUMENT_ROOT']}/PDO/includes/header.php");
    include ("{$_SERVER['DOCUMENT_ROOT']}/PDO/classes/ClassCrud.php");
?>
 

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
                            $cond= $_SESSION["id"];

                          
?>
<div class="content" style="margin-bottom: 3em;">
    <table class="tabelaCrud">
           <tr>
               <td>Nome</td>
               <td>Email</td>
               <td>Permition</td>
               <td>Status</td>
               <td>Ações</td>
           </tr>

         
            <tr>     
               <td><?php echo $_SESSION['name']; ?></td>
                <td><?php echo $_SESSION['email']; ?></td>
                <td><?php echo $_SESSION['permition']; ?></td>
                <td><?php echo $_SESSION['status']; ?></td>
                <td>
                    <a href="<?php echo "visualizar.php?id={$Fetch['idIdoso']}"; ?>">Visualizar</a>
                    <a href="<?php echo DIRPAGE."PDO/cadastro?id={$_SESSION['id']}"; ?>">Editar</a>
                    <a class="excluir" href="<?php echo "controllers/controllerExcluir.php?id={$_SESSION['id']}"; ?>">Deletar</a>
                </td>
            </tr>
         

       </table>
     </div>























 <div class="content" style="margin-bottom: 3em;">
    <table class="tabelaCrud">
           <tr>
               <td>Nome</td>
               <td>Contato</td>
               <td>Cidade</td>
               <td>Bairro</td>
               <td>Ações</td>
           </tr>

           <?php 
                $crud=new ClassCrud();
                $BFetch=$crud->selectDB(
                    "*",
                    "account",
                    "",
                    array(
                      
                    )
                );

                while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){

           ?>
            <tr>     
               <td><?php echo $Fetch['nome']; ?></td>
                <td><?php echo $Fetch['contato']; ?></td>
                <td><?php echo $Fetch['cidade']; ?></td>
                <td><?php echo $Fetch['bairro']; ?></td>
                <td>
                    <a href="<?php echo "visualizar.php?id={$Fetch['idIdoso']}"; ?>">Visualizar</a>
                    <a href="<?php echo DIRPAGE."PDO/cadastro?id={$Fetch['id']}"; ?>">Editar</a>
                    <a class="excluir" href="<?php echo "PDO/controllers/controllerExcluir.php?id={$Fetch['id']}"; ?>">Deletar</a>
                </td>
            </tr>
            <?php 
                }
            ?>

       </table>
     </div>






     <div class="content">
        <strong>Seus Anúncios</strong>      
    </div> 



    <div class="content">
       <table class="tabelaCrud">
           <tr>
               <td>Titulo</td>
               <td>descricao</td>
               <td>Categoria</td>
               <td>Preço</td>
               <td>dataCreate</td>
                <td>Ações</td>
           </tr>

           <?php 
                $crud=new ClassCrud();
                $BFetch=$crud->selectDB(
                    "*",
                    "account",
                    "",
                    array(
                    	
                    )
                );
                
              //  $BFetch = "SELECT * FROM account INNER JOIN ad ON id = id_account"; 
                
                while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){
                    

           ?>
            <tr>
            
                <td><?php echo $Fetch['titulo']; ?></td>
                <td><?php echo $Fetch['descricao']; ?></td>
                <td><?php echo $Fetch['categoria']; ?></td>
                <td><?php echo $Fetch['preco']; ?></td>
                <td><?php echo $Fetch['dataCreateAd']; ?></td>
                                <td>
                    <a href="<?php echo DIRPAGE."PDO/visualizar.php?Id={$Fetch['id']}"; ?>">Visualizar</a>
                    <a href="<?php echo DIRPAGE."/PDO/cadastro?id={$Fetch['id']}"; ?>">Editar</a>
                    <a class="excluir" href="<?php echo DIRPAGE."/PDO/controllers/controllerExcluir.php?id={$Fetch['id']}"; ?>">Deletar</a>
                </td>
            </tr>
            <?php 
                }
            ?>

       </table>
    </div> 






    

<?php include 'includes/footer.php';  ?>
    
