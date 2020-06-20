<?php
    $validate=new Classes\ClassValidate();

    $validate->validateFields($_POST);
    /*$validate->validateFields(array($nome));   valida um campo específico  */
    $validate->validateEmail($email);  // validação do email
    $validate->validateIssetEmail($email, "senha"); // verificação se o email está ou não no banco de dados
    //$validate->validateConfSenha($senha,$senhaConf); //verificação de senhas 
    $validate->validateEmailRecuperaSenha($email);
    
    echo $validate->validateFinalSen($arrayVar);
