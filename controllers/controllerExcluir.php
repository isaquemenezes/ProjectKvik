<?php

    include "./models/ModelCrud.php");

    $crud=new ModelCrud();
    $id_user=filter_input(INPUT_GET, "id", FILTER_SANITIZE_SPECIAL_CHARS);

    $crud->deleteDB(
            "users_idoso",
            "idIdoso=?",
            array(
                $id_user
            )
        );

    echo'Dados Deletados!<br>';
    echo "<a href='../index'>Home</a>";

?>