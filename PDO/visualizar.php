<?php    
    \Classes\ClassLayout::setHeadRestrito();  // Inicia a Sessão 
    include ("{$_SERVER['DOCUMENT_ROOT']}/ProjectKvik/PDO/classes/ClassCrud.php"); //Caminho Absoluto 
    Classes\ClassLayout::setHead(strtoupper($_SESSION['name']).' Minha Conta','Área Gerencie Sua Conta!'); 
    include ("{$_SERVER['DOCUMENT_ROOT']}/ProjectKvik/includes/header.php");
?>
    <div class="content">
        <?php
            $crud=new ClassCrud();
            $idUser=filter_input(INPUT_GET,"idIdoso", FILTER_SANITIZE_SPECIAL_CHARS);

            $BFetch=$crud->selectDB(
                            "*",
                            "users_idoso",
                            "where idIdoso=?",
                            array(
                                $idUser
                            )
                        );

            $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
        ?>
        <div style="margin-top: 15px;"><h1>Dados do Usuário</h1></div>
        <div style="margin-top: 10px; ">
            <ul>
                <li><strong>Nome: </strong><?php echo $Fetch['nome']; ?></li>
                
                <li><strong>Sexo: </strong><?php echo $Fetch['sexo']; ?></li>
                <li><strong>Cidade: </strong><?php echo $Fetch['cidade']; ?></li>
                <li><strong>Bairro: </strong><?php echo $Fetch['bairro']; ?></li>
                <li><strong>Contato do responsável: </strong><?php echo $Fetch['contato']; ?></li>
                <li><strong>Pode ser atendido à distância? : </strong><?php echo $Fetch['ead']; ?></li>
                <li><strong>Email do responsável: </strong><?php echo $Fetch['email']; ?></li>
                <li><strong>Idade: </strong><?php echo $Fetch['anoNascimento']; ?></li>
            <ul>
        </div>
    </div>

<?php include 'includes/footer.php';  ?>
    
