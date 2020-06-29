<?php
    $validate=new Classes\ClassValidate();
    
    $validate->validateFields($_POST);
    /*$validate->validateFields(array($nome));   valida um campo específico  */
    $validate->validateEmail($email);  // validação do email
    $validate->validateIssetEmail($email); // verificação se o email está ou não no banco de dados
    $validate->validateConfSenha($senha,$senhaConf); //verificação de senhas 
    
    echo $validate->validateFinalCad($arrayVar);
   