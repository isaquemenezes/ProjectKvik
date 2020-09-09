<?php 
    namespace Models;

    \Classes\ClassLayout::setHeadRestrito(); 
    \Classes\ClassLayout::setHead(strtoupper($_SESSION['name']).' Minha Conta',' Gerencie Sua Conta!'); 
    include "./includes/header.php";
    
?>
    <div class="content"><strong>Gerencie Sua Conta</strong>
        <div class="profile_image"><img src="<?php echo DIRIMG.'logo_kvik.png';?>" alt="<?php echo $users['nome'];?>"></div>
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
                        <?php 
                        $crud=new ModelCrud();
                        $select_users=$crud->selectDB("*", "users", "WHERE email=?", array($_SESSION['email']));
                        $users=$select_users->fetch(\PDO::FETCH_ASSOC);
                        ?>

                    <tr>
                        <td><?php echo $users['id'];?></td>  
                        <td><?php echo $users['status'];?></td>     
                        <td><?php echo $users['nome'];?></td>                    
                        <td><?php echo $users['email'];?></td>
                        <td><?php echo $users['contato']; ?></td>
                        <td><?php echo $users['cidade']; ?></td>
                        <td><?php echo $users['bairro']; ?></td>
                        <td>
                            <a href="<?php echo DIRPAGE."./editar-perfil?id={$users['id']}"; ?>">Editar</a>
                            <a class="excluir" href="<?php echo DIRPAGE."./controllers/controllerExcluir?id_users={$users['id']}"; ?>">Deletar Conta</a>
                        </td>
                    </tr>   
            </table>
    </div>

    
    <style>
        table tr td{
            padding:5px;             
        }
    
    </style>
    <div class="content"><strong>Gerencie Seus Cadastros</strong>
        <table class="tabelaCrud">
            <tr>
                <td>ID</td>
                <td>FK</td>
                <td>Nome</td>
                <td>Sexo</td>
                <td>Ano</td>
                <td>Cidade</td>
                <td>Bairro</td>
                <td>Categoria</td>
                <td>EAD</td>
                <td>Data Criacao</td>
                <td>Ações</td>
                
            </tr>
            <?php       
                $select_idoso=$crud->selectDB("*","users_idoso","WHERE fk_users=?", array($users['id']));
                while($users_idoso=$select_idoso->fetch(\PDO::FETCH_ASSOC)){ 
                    
            ?> 

            <tr>
                <td><?php echo $users_idoso['id']; ?></td>
                <td><?php echo $users_idoso['fk_users']; ?></td>    
                <td><?php echo $users_idoso['nome']; ?></td>         
                <td><?php echo $users_idoso['sexo']; ?></td>
                <td><?php echo $users_idoso['anoNascimento']; ?></td>
                <td><?php echo $users_idoso['cidade']; ?></td>
                <td><?php echo $users_idoso['bairro']; ?></td>
                <td><?php echo $users_idoso['categoria']; ?></td>
                <td><?php echo $users_idoso['ead']; ?></td>
                <td><?php echo $users_idoso['dateCreated']; ?></td>
                <td>
                    <a href="<?php echo DIRPAGE."./cadastro-idoso"; ?>">Cadastrar</a>
                    <a href="<?php echo DIRPAGE."./cadastro-idoso?id={$users_idoso['id']}"; ?>">Editar</a>
                    <a class="excluir" href="<?php echo DIRPAGE."./controllers/controllerExcluir?id_idoso={$users_idoso['id']}"; ?>">Deletar</a>
                </td>
               
            </tr>              
            <?php }?>
           
        </table>
    </div> 

    <div class="content"><strong>DB IDOSOS</strong>
        <table class="tabelaCrud">
            <tr>
                <td>ID</td>
                <td>FK</td>
                <td>Nome</td>
                <td>Sexo</td>
                <td>Ano</td>
                <td>Cidade</td>
                <td>Bairro</td>
                <td>Categoria</td>
                <td>EAD</td>
                <td>Data Criacao</td>
                <td>Ações</td>
                
            </tr>
            <?php       
                $select_idoso=$crud->selectDB("*","idosos","WHERE fk_users=?", array($users['id']));
                while($idosos=$select_idoso->fetch(\PDO::FETCH_ASSOC)){                     
            ?> 

            <tr>
                <td><?php echo $idosos['id']; ?></td>
                <td><?php echo $idosos['fk_users']; ?></td>    
                <td><?php echo $idosos['nome']; ?></td>         
                <td><?php echo $idosos['sexo']; ?></td>
                <td><?php echo $idosos['anoNascimento']; ?></td>
                <td><?php echo $idosos['cidade']; ?></td>
                <td><?php echo $idosos['bairro']; ?></td>
                <td><?php echo $idosos['categoria']; ?></td>
                <td><?php echo $idosos['ead']; ?></td>
                <td><?php echo $idosos['dateCreated']; ?></td>
                <td>
                    <a href="<?php echo DIRPAGE."./cadastro-idoso"; ?>">Cadastrar</a>
                    <a href="<?php echo DIRPAGE."./cadastro-idoso?id={$idosos['id']}"; ?>">Editar</a>
                    <a class="excluir" href="<?php echo DIRPAGE."./controllers/controllerExcluir?id_idoso={$idosos['id']}"; ?>">Deletar</a>
                </td>
               
            </tr>              
            <?php }?>
           
        </table>
    </div>       
    
    <?php include "./includes/footer.php"; ?>
    
    <!--======= FOOTER SCRIPTS =======-->
    <?php  \Classes\ClassLayout::setFooter();?>
