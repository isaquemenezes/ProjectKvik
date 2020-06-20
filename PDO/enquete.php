<?php 
    include 'includes/header.php';
    include 'classes/ClassCrud.php';
?>

    <div class="content">
        <form method="post" name="formEnqueteName" id="formEnqueteId" action="controllers/controllerEnquete.php">
            Você Gostou do Curso<br>
            <input type="radio" name="Radio" value="Sim">Sim<br>
            <input type="radio" name="Radio" value="Nao">Não<br>
            <input type="submit" value="Votar">
        </form>     
    
    </div>

    <div>
        <?php
            $crud=new ClassCrud();
            $BSIm=$crud->selectDB(
                "*",
                "enquete",
                "where Voto=?",
                array(
                    "Sim"
                )
            );
            $BNao=$crud->selectDB(
                "*",
                "enquete",
                "where Voto=?",
                array(
                    "Nao"
                )
            );
            $FSim=$BSIm->rowCount();
            $FNao=$BNao->rowCount();

            echo "Votaram SIM: ".$FSim."<br>";
            echo "Votaram Não: ".$FNao."<br>";
        ?>
    </div>

<?php include 'includes/footer.php';  ?>
    
