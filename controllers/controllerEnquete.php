<?php
    include("../includes/variaveis.php");
    include("../classes/ClassCrud.php");

    $crud=new ClassCrud();
    $crud->insertDB(
        "enquete",
        "?,?",
        array(
            $Id,
            $Radio
        )

    );
    echo "Success";