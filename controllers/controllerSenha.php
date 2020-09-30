<?php
    $validate=new Classes\ClassValidate();

    $validate->validateFields($_POST);
    $validate->validateEmail($Email);                  // validação do email
    $validate->validateIssetEmail($Email, "senha");    // verificação se o email está ou não no banco de dados
    //$validate->validateConfSenha($senha,$senhaConf); //verificação de senhas 
    $validate->validateEmailRecuperaSenha($Email);
    
    echo $validate->validateFinalSen($arrayVar);
