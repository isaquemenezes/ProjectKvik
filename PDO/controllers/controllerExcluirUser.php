<?php
   
    include ("{$_SERVER['DOCUMENT_ROOT']}/ProjectKvik/PDO/classes/ClassCrud.php");

    $crud=new classCrud();
    $id_user=filter_input(INPUT_GET, "Id", FILTER_SANITIZE_SPECIAL_CHARS);

    $crud->deleteDB(
        "users",
        "id=?",
        array(
            $id_user
        )
    );

    echo'Dados Deletados!<br>';
    echo "<a href='../index'>Home</a>";

?>