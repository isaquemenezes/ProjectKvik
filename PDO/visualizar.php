<?php 
    include 'includes/header.php'; 
    include 'classes/ClassCrud.php'; 
?>

    <div class="content">
        <?php
            $crud=new ClassCrud();
            $idUser=filter_input(INPUT_GET,"id", FILTER_SANITIZE_SPECIAL_CHARS);

            $BFetch=$crud->selectDB(
                "*",
                "cadastro",
                "where id=?",
                array(
                    $idUser
                )
            );

            $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
        ?>
        <div style="margin-top: 15px;">
            <h1>Dados do Usuário</h1>
        </div>
        <div style="margin-top: 10px; ">
            <ul>
                <li><strong>Nome: </strong><?php echo $Fetch['nome']; ?></li>
                <li><strong>Sexo: </strong><?php echo $Fetch['sexo']; ?></li>
                <li><strong>Cidade: </strong><?php echo $Fetch['cidade']; ?></li>
            <ul>
        </div>
    </div>

<?php include 'includes/footer.php';  ?>
    
