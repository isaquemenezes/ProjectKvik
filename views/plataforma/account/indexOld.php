<?php 
    namespace Models;

    \Classes\ClassLayout::setHeadRestrito(); 
    \Classes\ClassLayout::setHeadSubPage(strtoupper($_SESSION['name']).' Minha Conta',' Gerencie Sua Conta');     
?>

        <!-- Header ================================ -->
        <?php include 'includes/subPages/header.php'; ?>
       
		<!-- Nav ======================= -->
		<?php include 'includes/subPages/nav-menu.php'; ?>
		
		<!-- Section One =====-->
        <section id="One" class="wrapper style3">
		    <div class="inner">

				<header class="align-center">
    
                   <img  style="margin: -2em;" src="<?php echo DIRIMG.'logo_kvik.png';?>" alt="logo kvik">	
	
    				<p></p>
					<h2>Gerencie Sua Conta</h2>
	
    			</header>

			</div>
		</section>
               
    <style>
        table tr td{ padding:5px; }    
    </style>

    <?php

        $user_email=$_SESSION['email'];
        $crud=new ModelCrud();
        
        $select_users=$crud->selectDB("*", "users", "WHERE email=?", array($user_email));
        $users=$select_users->fetch(\PDO::FETCH_ASSOC);
    
    ?>


                        <div class="box">

						    <div class="image fit">
								<!-- foto perfil <img src="" alt="" />-->
							</div>

						<div class="content">

							<header class="align-center">
						
                        		<h2 id="marker1">Organize Seu Perfil</h2>
						
                            </header>

                            <div class="retornoCad"></div><br><br>
                               
                                <!-- Form -->
                                <form method="post" name="formCadastro" id="formCadastro" action="<?php echo DIRPAGE.'controllers/controllerCadastro'; ?>">
                                    
                                    <div class="row uniform">
                                        
                                        <div class="6u 12u$(xsmall)">
                                        <label for="">Nome </label>
                                            <input type="text" name="name" id="name" value="<?php echo $users['nome']; ?>"></div>
                                            
                                        <div class="6u$ 12u$(xsmall)">
                                            <label for="">Email </label>
                                            <input type="email" name="email" id="email" value="<?php echo $users['email'];?>" readonly></div>

                                        <div class="6u 12u$(xsmall)">
                                            <label for="">Contato </label>
                                            <input type="text" id="contato" name="contato" value="<?php echo $users['contato']; ?>" placeholder="Contato"/></div>
                                        
                                        <div class="6u 12u$(xsmall)">
                                            <label for="">Cidade</label>
                                            <input type="text" id="cidade" name="cidade" value="<?php echo $users['cidade']; ?>" placeholder="Cidade:"></div>
                                        
                                        <div class="6u 12u$(xsmall)">
                                            <label for="">Bairro </label>
                                            <input type="text" id="bairro" name="bairro" value="<?php echo $users['bairro']; ?>" placeholder="Bairro:"></div>
                                        
                                            <div class="6u 12u$(xsmall)">
                                            <label for="">Status da conta</label>
                                            <?php 
                                                if($users['status'] == "confirmation"){
                                                    $status = "Ative sua conta pelo link do email";
                                                } else {
                                                    $status = "Conta Ativada";
                                                }
                                                echo "<p> {$status} </p>";
                                            ?>
                                          </div>
                                        
                                         <!-- Break -->
                                        <div class="12u$">
                                            
                                            <ul class="actions">
                                            
                                                <li><a href="<?php echo DIRPAGE."./editar-perfil?id={$users['id']}"; ?>" class="button special">Editar</a></li>
                                                <li><a class="excluir-conta" href="<?php echo DIRPAGE."./controllers/controllerExcluir?id_users={$users['id']}"; ?>">Deletar Conta</a></li>
                                            
                                            </ul>

                                        </div><br><br>
                                    
                                    </div>

                                </form>
								
								</div>
							</div>
                        
                       
                            

            <header class="align-center">
            
                <h2 id="marker2">Gerencie Seus Cadastros</h2>
            
            </header>
        
        <div class="content">
        <table class="tabelaCrud">
            
            <tr>
            
                <td>Nome</td>
                <td>Sexo</td>
                <td>Ano</td>
                <td>Cidade</td>
                <td>Bairro</td>
                <td>Categoria</td>
                <td>Online?</td>
                <td>voluntário</td>
            
                <td><a href="<?php echo DIRPAGE."cadastro-idoso"; ?>" class="button special">Cadastrar</a></td>
                
            </tr>
            
            <?php    

                $users=$users['id'];
                $select_idoso=$crud->selectDB("*","users_idoso","WHERE fk_users=?", array($users));
                                                
                while($idoso=$select_idoso->fetch(\PDO::FETCH_ASSOC)){  ?> 
            
                    <tr>   
                        
                        <td><?php echo $idoso['nome']; ?></td>         
                        <td><?php echo $idoso['sexo']; ?></td>
                        <td><?php echo $idoso['anoNascimento']; ?></td>
                        <td><?php echo $idoso['cidade']; ?></td>
                        <td><?php echo $idoso['bairro']; ?></td>
                        <td><?php echo $idoso['categoria']; ?></td>
                        <td><?php echo $idoso['Aa']; ?></td>

                        <td>   
                            <?php 
                                $idoso_id=$idoso['id'];
                                $select_db_conexao = $crud->selectDB("*", "conexao", "where fk_users_idoso=?", array($idoso_id));
                                $rowCount = $select_db_conexao->rowCount();

                               // while($select_conexao= $select_db_conexao->fetch(\PDO::FETCH_ASSOC)){
                                while($data_conexao= $select_db_conexao->fetch(\PDO::FETCH_ASSOC))
                                {
                                    //echo $rowCount; 
                                    echo "<a href='".DIRPAGE."profile-user-volunteer?profile={$data_conexao['fk_users']}?solicitation_id={$data_conexao['id']}'>Perfil </a>";
                                
                                }
   
                            ?>
    

                        </td>
                        
                        
                        
                        <td>
                        
                        <a href="<?php echo DIRPAGEP."cadastro-idoso?id={$idoso_id}"; ?>" class="button">Editar</a>
                           
                            <a class="excluir" href="<?php echo DIRPAGE."controllers/controllerExcluir?id_idoso={$idoso_id}"; ?>">Deletar</a>
                        
                        </td>
                        
                    </tr>              
            
            <?php }?> 

        </table>
    </div>   

    <br><br><br><br><br><br>
    <!--======= FOOTER SCRIPTS =======-->
    <?php  
    
        include "includes/footer.php"; 
        \Classes\ClassLayout::setFooter(); 
    
    ?>
    
    
