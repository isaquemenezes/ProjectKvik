<?php 
    namespace Models;
    
    \Classes\ClassLayout::setHead('kvik | Plataforma de Voluntariado','kvik'); 

?>


<style>
header > .container{
	display: inline-block;		
  height: 250px;
  width: 250px;
  overflow: hidden;
  margin: 0 auto;
  border-radius: 50%;
  transition: all 0.3s ease-in-out;
  box-shadow: 0px 1px 5px 0px rgba(0,0,0,0.3);
  background: linear-gradient(45deg, #7b00e0, #ae31d9);
  
}
.container p{
    color: #fff;
}
header > .container:hover{
  height: 620px;
  width: 620px;
  border-radius: 5px;
  box-shadow: 0px 1px 35px 0px rgba(0,0,0,0.3);
}
header > .container .wrapper-profile img{
  position: relative;
  z-index: 20;
  border-radius: 50%;
  display: block;
  height: 200px;
  width: 200px;
  border: 5px solid #fff;
  object-fit: cover;
  margin: 20px auto;
  transition: all 0.3s ease;
}
header > .container:hover .wrapper-profile img.active{
  height: 470px;
  width: 350px;
  margin: 0px auto;
  border: none;
  border-radius: 5px;
}
.wrapper-profile .title{
  color: #fff;
  font-size: 30px;
  font-weight: 500;
  padding: 10px;
  line-height: 25px;
}
header > .wrapper-profile .place{
  color: #fff;
  font-size: 17px;
  line-height: 0px;
  margin: 10px 0;
}
header > .content{
  color: #fff;
  font-size: 17px;
  margin-top: 70px;
  padding: 1px 20px 10px 20px!important;
  
}

header > .content .buttons{
  display: flex;
}
header > .buttons .btn{
  height: 40px;
  width: auto;
  margin: 0 auto;
}
header > .buttons .btn button{
  height: 100%;
  width: 100%;
  background: #fff;
  border: none;
  outline: none;
  cursor: pointer;
  font-size: 17px;
  font-weight: 500;
  border-radius: 5px;
  transition: all 0.3s;
}
header > .btn button:hover{
  transform: scale(0.95);
}
header > .container .icons{
  position: relative;
  list-style: none;
}
header > .container .icons.active{
  display: none;
}
header > .container .icons li{
	display:inline-block;
  height: 40px;
  width: 40px;
  margin: 5px 0;
  opacity: 0;
  margin-left: -100px;
  transition: all 0.5s ease;
}
header > .container:hover .icons li{
  opacity: 1;
  margin-left: 7px;
}
header > .container:hover .icons li:nth-child(2){
  transition-delay: 0.2s;
}
header > .container:hover .icons li:nth-child(3){
  transition-delay: 0.4s;
}
header > .container .icons li a{
  color: #7b00e0;
  height: 100%;
  width: 100%;
  border-radius: 50%;
  background: #fff;
  display: block;
  line-height: 40px;
  transition: all 0.3s;
}
header > .container .icons li a:hover{
  transform: scale(0.9);
}

</style>



		<!-- Header ========================-->
		<?php include 'includes/subPages/header.php'; ?>
		
		<!-- Nav ======================= -->
		<?php include 'includes/subPages/nav-menu.php'; ?>

        <!-- Section One =====-->
        <section id="One" class="wrapper style3">
		    <div class="inner">

				  <header class="align-center">

            <img  style="margin: -2em;" src="<?php echo DIRIMG.'logo_kvik.png';?>" alt="logo kvik">	
            <p></p>
            <h2>Conheça Nosso Voluntário </h2>
				
          </header>

			</div>
		</section>

        <br><br>   
        <div class="box">

            <div class="content">
            
                <header class="align-center">

                <?php

                    /*if(isset($_POST['profile']))
                    {
                        $id_profile=filter_input(INPUT_POST,'profile',FILTER_SANITIZE_SPECIAL_CHARS);  
                    
                    }elseif(isset($_GET['profile'])){

                        $id_profile=filter_input(INPUT_GET,'profile',FILTER_SANITIZE_SPECIAL_CHARS);
                    
                    }*/
                    
                    $crud=new ModelCrud();
                    
                    $select_db = $crud->selectDB("*", "users", "WHERE id=?", array($id_profile));
                    $data_users = $select_db->fetch(\PDO::FETCH_ASSOC);        
                
                ?>

                    <h2><?php echo ucwords($data_users['nome']); ?></h2>

                        <div class="container">
                            <div class="wrapper-profile">
                                
                                <a href="#">
                                    <img src="<?php echo DIRIMG.'mentor.jpg'; ?>" alt="">
                                </a>

                                <div class="title"><?php echo ucwords($data_users['nome']); ?></div>
                                <!--<div class="place">vazio</div>-->
                            </div>

                                <div class="content">

                                    <p>Desenvolvedor <br> Back-end | Análise de Dados <br>
                                    C/C++, Javascript | Tecnologia Blockchain</p>
                                    <p>Acadêmico: UFPA - Sistema de Informação </p>
                                    <p>Formação: ETEMB - Técnico em Eletrônica</p>
                                    <p>Formação: IFPA - Técnico em Informática</p>
                                                
                                    <!--<div class="buttons">
                                        <div class="btn">
                                            <button>Founder & CEO</button>
                                        </div>													
                                    </div>-->
                                </div>

                                <div class="icons">
                                        
                                    <li><a href="https://linkedin.com/in/isaquemenezes" target="_blank"><span class="fab fa-linkedin-in"></span></a></li>
                                    <li><a href="https://facebook.com/isaquemene" target="_blank"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="https://twiter/isaquemene" target="_blank"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="https://instagram.com/_isaquemenezes" target="_blank"><span class="fab fa-instagram"></span></a></li>									
                                            
                                </div>

                        </div>	
                </header>
                <br><br><br><br>                 
                                    <!-- Form -->
                                <form>
                                    
                                    <div class="row uniform">
                                     
                                        <div class="6u 12u$(xsmall)">
                                        <label for="">Nome </label>
                                            <input type="text" value="<?php echo $data_users['nome']; ?>" readonly></div>
                                            
                                        <div class="6u$ 12u$(xsmall)">
                                            <label for="">Email </label>
                                            <input type="email" value="<?php echo $data_users['email']; ?>" readonly></div>

                                        <div class="6u 12u$(xsmall)">
                                            <label for="">Contato </label>
                                            <input type="text" value="<?php echo $data_users['contato']; ?>" placeholder="Contato" readonly /></div>
                                        
                                        <div class="6u 12u$(xsmall)">
                                            <label for="">Cidade</label>
                                            <input type="text" value="<?php echo $data_users['cidade']; ?>" placeholder="Cidade:"readonly /></div>
                                        
                                        <div class="6u 12u$(xsmall)">
                                            <label for="">Bairro </label>
                                            <input type="text" value="<?php echo $data_users['bairro']; ?>" placeholder="Bairro:" readonly></div>
                                        
                                            <div class="6u 12u$(xsmall)">
                                            <label for="">Status da conta</label>
                                            
                                            <?php 

                                                if($data_users['status'] == "confirmation")
                                                {
                                                    $status = "Conta Pendende";
                                                
                                                }else {

                                                    $status = "Conta Ativada";
                                                
                                                }
                                                
                                                echo "<p> {$status} </p>";

                                            ?>

                                          </div>
                                        
                                         <!-- Break -->
                                        <div class="12u$">
                                            
                                            <ul class="actions">
                                                <?php 
                                                      if(!empty($solicitation_id)){

                                                        echo "<li><a href='".DIRPAGE."controllers/controllerCon?id={$data_users['id']}' class='button special'>Aceita</a></li>";
                                                        echo "<li><a href='".DIRPAGE."controllers/controllerCon?negative={$data_users['id']}' class='button special'>Ainda Não</a></li>";
                                                        
                                                      }else{
                                                          echo "";
                                                      }
                                                      echo (\Traits\TraitParseUrl::parseUrl(2));
                                                      echo "solicitation ".$solicitation_id;
                                                ?>    
                                                <!--<li><a href="<?php //echo DIRPAGE."?id={$data_users['id']}"; ?>" class="button special">Aceita</a></li>
                                                <li><a href="<?php //echo DIRPAGE."controllers/controllerCon?negative={$data_users['id']}"; ?>" class="button special">Ainda Não</a></li>-->
                                                
                                            </ul>

                                        </div><br><br>

                                    </div>
                                </form>


        </div> 
        </div>                           

        <br><br>  <br>		
	<!-- Footer ========================-->
    <?php 
    
    include_once 'includes/footer.php';	
     \Classes\ClassLayout::setFooter();
    
    
    ?>
