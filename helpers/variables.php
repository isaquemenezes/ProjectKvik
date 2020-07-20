<?php
    
    $objPass=new \Classes\ClassPassword();

    #Input Nome
    if(isset($_POST['nome'])){ 
        $nome=filter_input(INPUT_POST,'nome',FILTER_SANITIZE_FULL_SPECIAL_CHARS);   
    }else{  
        $nome=null; 
    }
    
    #Input Email
    if(isset($_POST['email'])){  
        $email=filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);  
    }else{  
        $email=null;   
    }

    #Input Cidade
    if(isset($_POST['cidade'])){ 
        $cidade=filter_input(INPUT_POST,'cidade',FILTER_SANITIZE_FULL_SPECIAL_CHARS);  
    }else{  
        $cidade=null; 
    }

    #Input Bairro
    if(isset($_POST['bairro'])){ 
        $bairro=filter_input(INPUT_POST,'bairro',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }else{ 
        $bairro=null; 
    }

    #Input formulário de contato
    if(isset($_POST['contato'])){ 
        $contato=filter_input(INPUT_POST,'contato', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }else{ 
        $contato=null; 
    }
    
    //if(isset($_POST['cpf'])){$cpf=filter_input(INPUT_POST,'cpf',FILTER_SANITIZE_FULL_SPECIAL_CHARS);}else{$cpf=null;}
    //if(isset($_POST['dataNascimento'])){$dataNascimento=filter_input(INPUT_POST,'dataNascimento',FILTER_SANITIZE_FULL_SPECIAL_CHARS);}else{$dataNascimento=null;}
    
    //Input Senha
    if(isset($_POST['senha'])){  
        $senha=$_POST['senha'];  $hashSenha=$objPass->passwordHash($senha); 
    }else{  
        $senha=null;  
        $hashSenha=null;  
    }

    #Input Confirmacao de Senha
    if(isset($_POST['senhaConf'])){ 
        $senhaConf=$_POST['senhaConf']; 
    }else{  
        $senhaConf=null;  
    }   

    //GOOGLE RECAPTCHA 
    //if(isset($_POST['g-recaptcha-response'])){$gRecaptchaResponse=$_POST['g-recaptcha-response'];}else{$gRecaptchaResponse=null;}
   
    #Input data de Criacao 
    date_default_timezone_set('America/Sao_Paulo');

    $dataCreate=date("Y-m-d H:i:s", time());
    
    #Esqueci minha senha - Recuperação
    $token=bin2hex(random_bytes(64));
       
    if(isset($_POST['token'])){  
        $token=$_POST['token'];  
    }else{  
        $token=bin2hex(random_bytes(64)); 
    }

    #Array para inserção no banco de dados
    $arrayVar=[
        "nome"=>$nome,
        "email"=>$email,
        "cidade"=>$cidade,
        "bairro"=>$bairro,
        "contato"=>$contato,
        "senha"=>$senha,
        "hashSenha"=>$hashSenha,
        "dataCreate"=>$dataCreate,
        "token"=>$token,
    ];


    