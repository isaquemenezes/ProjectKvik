<?php
    $validate=new Classes\ClassValidate();
    
    $validate->validateFields($_POST);
    $validate->validateEmail($email);                // validação do email
    $validate->validateIssetEmail($email);           // verificação se o email, não estar, no banco de dados(nova conta) 
    $validate->validateConfSenha($senha,$senhaConf); //verificação de senhas e confirmacao de senha
    
    echo $validate->validateFinalCad($arrayVar);
   