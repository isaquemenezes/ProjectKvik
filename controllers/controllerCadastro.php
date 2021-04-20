<?php
    $validate=new Classes\ClassValidate();
    

    $validate->validateFields($_POST);               // Validação dos fields   
    $validate->validateEmail($Email);                // validação do email
    $validate->validateIssetEmail($Email);           // verificação se o email, não estar, no banco de dados(nova conta) 
    $validate->validateConfSenha($senha,$senhaConf); //verificação de senhas e confirmacao de senha
    
   
    echo $validate->validateFinalCad($arrayVar);
   