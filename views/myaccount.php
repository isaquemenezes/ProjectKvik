<?php 
    namespace Models;

    \Classes\ClassLayout::setHeadRestrito(); 
    \Classes\ClassLayout::setHeadSubPage(strtoupper($_SESSION['name']).' Minha Conta',' Gerencie Sua Conta');     
?>

        <!-- Header ========================================-->
        <?php include_once './includes/subPages/header.php'; ?>
        <!-- /Header =======================================-->	

		<!-- Nav ======================= -->
		<?php include './includes/nav.php'; ?>
		<!-- Nav /======================= -->	

		<!-- Section One =====-->
        <section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
                    <img  style="margin: -2em;" src="<?php echo DIRIMG.'logo_kvik.png';?>" alt="logo kvik">	
					<p></p>
						<h2>Gerencie Sua Conta</h2>
					</header>
				</div>
		</section><!-- /Section One ========
        ========================================-->
       
    <div class="content">
        
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
        table tr td{ padding:5px; }    
    </style>
    
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
                $users=$users['id'];
                $select_idoso=$crud->selectDB("*","users_idoso","WHERE fk_users=?", array($users));
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

    <!--======= FOOTER SCRIPTS =======-->
    <?php  \Classes\ClassLayout::setFooter();?>
    <?php include "./includes/footer.php"; ?>
    
    
