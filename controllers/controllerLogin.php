<?php
    $validate=new Classes\ClassValidate();

    $validate->validateFields($_POST); //valida se todos os campos via post estão preechidos
    /*$validate->validateFields(array($nome));   valida um campo específico  */
    $validate->validateEmail($email);  // validação do email
    $validate->validateIssetEmail($email, "login"); // verificação se o email está no banco de dados para o login
    $validate->validateSenha($email,$senha); //verificação de senhas
    //$validate->validateUserActive($email); // token de ativação do email 
    $validate->validateAttemptLogin();  //controle d tentativas de login do usuário
    echo $validate->validateFinalLogin($email); 
    
    
