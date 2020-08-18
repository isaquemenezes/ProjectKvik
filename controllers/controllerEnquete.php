<?php

    include("../includes/variaveis.php");
   

    $crud=new \Models\ModelCrud();
    $crud->insertDB(
        "enquete",
        "?,?",
        array(
            $Id,
            $Radio
        )

    );
    echo "Success";