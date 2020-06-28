    <nav id="mainnavbar" class="navbar navbar-expand-sm navbar-dark bg-dark navtransparente">
      
            <?php
                if(isset($_SESSION['id_users'])){ 
                    echo "<a class='navbar-brand' href=".DIRPAGE."home>". 
                    "<img src='./assets/images/logo.png' width='40' height='40' class='d-inline-block align-middle' 
                    alt='logotipo kvik'><span class='text-uppercase align-middle navbar-brand'>
                    <font style='vertical-align: inherit;'>
                    <font style='vertical-align: inherit;'>&nbsp;Kvik.com</font></font></span>                    
                    </a>";
                }
                else{ echo "<a class='navbar-brand' href=".DIRPAGE."index>".
                    "<img src='./assets/images/logo.png' width='40' height='40' class='d-inline-block align-middle' 
                    alt='logotipo kvik'><span class='text-uppercase align-middle navbar-brand'>
                    <font style='vertical-align: inherit;'>
                    <font style='vertical-align: inherit;'>&nbsp;Kvik.com</font></font></span>                    
                    </a>";   
                }
            ?>    
 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#usernavbar" aria-controls="usernavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse" id="usernavbar">
            <ul class="navbar-nav ml-auto">
                 <!-- FAQ -->           
                <li class="nav-item ml-auto">
                    <a class="nav-link" href="<?php echo DIRPAGE.'faq'; ?>"><font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">FAQ</font></font></a></li>

                 <!-- SOBRE -->
                <li class="nav-item ml-auto">
                    <a class="nav-link" href="#sobre"><font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">SOBRE</font></font></a></li>

                <!-- Cadastrar um Idoso  -->
                <li class="nav-item ml-auto">
                    <a class="nav-link active" href="<?php echo DIRPAGE.'cadastro-idoso';?>"><font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">
                        
                        <?php
                            if(isset($_SESSION['id_users'])){ echo "Cadastrar um Idoso";  }
                            else{  echo "";  }
                        ?>

                    </font></font></a></li>

                <!-- Conta  -->
                <li class="nav-item ml-auto">
                    <a class="nav-link active" href="<?php echo DIRPAGE.'minha-conta';?>"><font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">
                        
                        <?php
                            if(isset($_SESSION['id_users'])){ echo "Conta";  }
                            else{  echo "";  }
                        ?>

                    </font></font></a></li>    
                
                <!-- Entrar-->
                <li class="nav-item ml-auto">
                    <a class="nav-link specialico" href="<?php echo DIRPAGE.'login';?>"><font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">
                        
                        <?php
                            if(isset($_SESSION['id_users'])){ echo strtoupper($_SESSION['name']); }
                            else{  echo "Entrar";  }
                        ?>

                    </font></font></a></li>

                 <!-- LOGOUT -->
                <li class="nav-item ml-auto">
                    <a class="nav-link active" href="<?php echo DIRPAGE.'controllers/controllerLogout';?>"><font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">
                            
                            <?php
                                if(isset($_SESSION['id_users'])){  echo "Logout";  }
                                else{ echo ""; }  
                            ?>

                        </font></font></a>
                </li>
            </ul>
        </div>
    </nav>
