    <nav id="mainnavbar" class="navbar navbar-expand-sm navbar-dark bg-dark navtransparente">
            
            <?php
                //USUÁRIO LOGADO
                if(isset($_SESSION['id_users'])){ 
                    echo "<a class='navbar-brand' href=".DIRPAGE."home>". 
                    "<img src='./assets/images/logo.png' width='40' height='40' class='d-inline-block align-middle' 
                    alt='logotipo kvik'><span class='text-uppercase align-middle navbar-brand'>
                    &nbsp;Kvik.com</span> </a>";
                }
                 //USUÁRIO NÃO LOGADO
                else{ echo "<a class='navbar-brand' href=".DIRPAGE."index>".
                    "<img src='./assets/images/logo.png' width='40' height='40' class='d-inline-block align-middle' 
                    alt='logotipo kvik'><span class='text-uppercase align-middle navbar-brand'>
                    &nbsp;Kvik.com</span> </a>";   
                }
            ?>    
 
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#usernavbar" aria-controls="usernavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="usernavbar">
                <ul class="navbar-nav ml-auto">
                    <!-- MENU FAQ -->           
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="<?php echo DIRPAGE.'faq'; ?>">FAQ</a></li>

                    <!-- MENU SOBRE -->
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="#sobre"> SOBRE </a></li>

                    <!--MENU Cadastrar um Idoso  -->
                    <li class="nav-item ml-auto">
                        <a class="nav-link active" href="<?php echo DIRPAGE.'cadastro-idoso';?>">
                            
                            <?php
                                if(isset($_SESSION['id_users'])){ echo "Cadastrar um Idoso";  }
                                else{  echo "";  }
                            ?>

                        </a></li>

                    <!-- GERENCIE SUA CONTA  -->
                    <li class="nav-item ml-auto">
                        <a class="nav-link active" href="<?php echo DIRPAGE.'minha-conta';?>">
                            
                            <?php
                                if(isset($_SESSION['id_users'])){ echo "Conta";  }
                                else{  echo "";  }
                            ?>

                        </a></li>    
                    
                    <!-- MENU Entrar-->
                    <li class="nav-item ml-auto">
                        <a class="nav-link specialico" href="<?php echo DIRPAGE.'login';?>">
                            
                            <?php
                                if(isset($_SESSION['id_users'])){ echo strtoupper($_SESSION['name']); }
                                else{  echo "Entrar";  }
                            ?>

                        </a></li>

                    <!-- MENU LOGOUT -->
                    <li class="nav-item ml-auto">
                        <a class="nav-link active" href="<?php echo DIRPAGE.'controllers/controllerLogout';?>">
                            
                            <?php
                                if(isset($_SESSION['id_users'])){  echo "Logout";  }
                                else{ echo ""; }  
                            ?>

                        </a>
                    </li>
                </ul>
            </div>
    </nav>
