<?php
    $validate=new Classes\ClassValidate();
    
    $validate->validateFields($_POST);
    
    // $validate->validateEmail($email);  validação do email
    //$validate->validateIssetEmail($email);  verificação se o email está ou não no banco de dados
    //$validate->validateConfSenha($senha,$senhaConf); verificação de senhas 
    $validate->validateFields(array($email)); //  valida um campo específico  */
    
    echo $validate->validateFinalCadastroIdoso($arrayVar2);//Minhas modificacoes