<?php 
    namespace Models;

    \Classes\ClassLayout::setHeadRestrito(); 
    
    \Classes\ClassLayout::setHead(strtoupper($_SESSION['name']).' Minha Conta',' Gerencie Sua Conta!'); 
    include "./includes/header.php";
    
?>
    <div class="content"><strong>Gerencie Sua Conta</strong>
    <div class="profile_image"><img src="<?php echo DIRIMG.'logo_kvik.png';?>" alt="<?php echo $_SESSION['name'];?>"></div>
        <table class="tabelaCrud">
           <tr>
                <td>Id</td>
                <td>Status da Conta</td>
                <td>Nome</td>
                <td>Email</td>   
                <td>Contato</td>
                <td>Cidade</td>
                <td>Bairro</td>
                <td>Ações</td>
           </tr>

            <tr>
                <td><?php echo $_SESSION['id_users'];?></td>  
                <td><?php echo $_SESSION['status'];?></td>     
                <td><?php echo $_SESSION['name'];?></td>                    
                <td><?php echo $_SESSION['email'];?></td>
                <td><?php echo $_SESSION['contato']; ?></td>
                <td><?php echo $_SESSION['cidade']; ?></td>
                <td><?php echo $_SESSION['bairro']; ?></td>
                <td>
                    <a href="<?php echo DIRPAGE."./editar-perfil?id={$_SESSION['id_users']}"; ?>">Editar</a>
                    <a class="excluir" href="<?php echo DIRPAGE."./controllers/controllerExcluirUser?id={$_SESSION['id_users']}"; ?>">Deletar Conta</a>
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
               <td>Data Criacao</td>
               <td>Ações</td>
           </tr>
    
            <?php       
                $crud=new ModelCrud();
                $results1=$crud->selectDB("*","users","", array());
                // if - Precisa Ser Revisado
                if($results1->fetch(\PDO::FETCH_ASSOC)){
                    $email_user = $_SESSION['email'];        
                    $results_cadastro=$crud->selectDB("*", "users_idoso","where email='$email_user'",array());   
                    $cadastro=$results_cadastro->fetch(\PDO::FETCH_ASSOC); 
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
                <td><?php echo $cadastro['dateCreated']; ?></td>
                <td>
                    <a href="<?php echo DIRPAGE."./cadastro-idoso"; ?>">Cadastrar</a>
                    <a href="<?php echo DIRPAGE."./cadastro-idoso?id={$cadastro['idIdoso']}"; ?>">Editar</a>
                    <a class="excluir" href="<?php echo DIRPAGE."./controllers/controllerExcluir?id={$cadastro['idIdoso']}"; ?>">Deletar</a>
                </td>
            </tr>              
        </table>
    </div>
    
    <?php include "./includes/footer.php"; ?>
    
    <!--======= FOOTER SCRIPTS =======-->
    <?php  \Classes\ClassLayout::setFooter();?>
