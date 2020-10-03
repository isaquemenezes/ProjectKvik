<?php
    $validate=new Classes\ClassValidate();
    
    $validate->validateFields($_POST);               // Validação dos fields   
   
    echo $validate->validateFinalCadIdoso($arrayVar);
   