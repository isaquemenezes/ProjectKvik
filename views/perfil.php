<?php    
    namespace Models;
    
    //\Classes\ClassLayout::setHeadRestrito();   
    \Classes\ClassLayout::setHead(' Minha Conta','Área Gerencie Sua Conta!'); 
    
?>
    <div class="content">

        <?php

            $crud=new ModelCrud();
            //$idUser=filter_input(INPUT_GET,"id", FILTER_SANITIZE_SPECIAL_CHARS);

            $BFetch=$crud->selectDB( "*", "users", "", array());

            $Fetch=$BFetch->fetch(\PDO::FETCH_ASSOC);

        ?>

        <div style="margin-top: 15px;"><h1>Dados do Usuário</h1></div>
        <div style="margin-top: 10px; ">
            
            <ul>

                <li><strong>Nome: </strong><?php echo $Fetch['nome']; ?></li>                   
                <li><strong>Cidade: </strong><?php echo $Fetch['cidade']; ?></li>
                <li><strong>Bairro: </strong><?php echo $Fetch['bairro']; ?></li>
                <li><strong>Email do responsável: </strong><?php echo $Fetch['email']; ?></li>
            
            <ul>
            
        </div>
        <a href="<?php echo DIRPAGE.'profile-user-volunteer?profile='.$Fetch['id']; ?>">Perfil Completo</a>
    </div>

<?php include './includes/footer.php';  ?>
    
