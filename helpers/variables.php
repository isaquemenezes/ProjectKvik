<?php    
    
    $objPass=new \Classes\ClassPassword();
    
    $filter=new \Classes\ClassAuxilia();

    //$obj->verifyIdSessions();
    //Acao de enviar
    if(isset($_POST['Acao'])){ 
        $Acao=filter_input(INPUT_POST,'Acao',FILTER_SANITIZE_SPECIAL_CHARS); 
    }elseif(isset($_GET['Acao'])){  
        $Acao=filter_input(INPUT_GET,'Acao',FILTER_SANITIZE_SPECIAL_CHARS);  
    }else{  $Acao="";   }

    //id DB users_idoso  
    if(isset($_POST['id'])){ 
        $Id=filter_input(INPUT_POST,'id',FILTER_SANITIZE_SPECIAL_CHARS); 
    }elseif(isset($_GET['id'])){ 
        $Id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS); 
    }else{ $Id=0;  }

    //fk_users DB users_idoso com id users 
    if(isset($_POST['fk_users'])){ 
        $Fk_users=filter_input(INPUT_POST,'fk_users',FILTER_SANITIZE_SPECIAL_CHARS); 
        
    }elseif(isset($_GET['fk_users'])){ 
        $Fk_users=filter_input(INPUT_GET,'fk_users',FILTER_SANITIZE_SPECIAL_CHARS); 
        
    }else{ $Fk_users=null;}


    //Nome DB users e DB cadastro(idoso)
    if(isset($_POST['name'])){ 
        $Name=filter_input(INPUT_POST,'name',FILTER_SANITIZE_SPECIAL_CHARS);  
    }elseif(isset($_GET['name'])){ 
        $Name=filter_input(INPUT_GET,'name',FILTER_SANITIZE_SPECIAL_CHARS);
    }else{ $Name=null;  }
    $Nome=$filter->filterVariavel($Name); 

    #sexo DB cadastro(idoso)
    if(isset($_POST['sexo'])){ 
        $Sexo=filter_input(INPUT_POST,'sexo',FILTER_SANITIZE_SPECIAL_CHARS);  
    }elseif(isset($_GET['sexo'])){ 
        $Sexo=filter_input(INPUT_GET,'sexo',FILTER_SANITIZE_SPECIAL_CHARS);
    }else{ $Sexo=null;  }

    # anoNascimento DB cadastro(idoso)
    if(isset($_POST['anoNascimento'])){ 
        $AnoNascimento=filter_input(INPUT_POST,'anoNascimento',FILTER_SANITIZE_SPECIAL_CHARS);  
    }elseif(isset($_GET['anoNascimento'])){ 
        $AnoNascimento=filter_input(INPUT_GET,'anoNascimento',FILTER_SANITIZE_SPECIAL_CHARS);
    }else{ $AnoNascimento=null;  } 

    #contato DB users e DB cadastro(idoso)
    if(isset($_POST['contato'])){ 
        $Contato=filter_input(INPUT_POST,'contato',FILTER_SANITIZE_SPECIAL_CHARS); 
    }elseif(isset($_GET['contato'])){ 
        $Contato=filter_input(INPUT_GET,'contato',FILTER_SANITIZE_SPECIAL_CHARS); 
    }else{   $Contato=null;  } 

    #email DB users e DB cadastro(idoso)
    if(isset($_POST['email'])){ 
        $Email=filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
    }elseif(isset($_GET['email'])){ 
        $Email=filter_input(INPUT_GET,'email',FILTER_VALIDATE_EMAIL); 
    }else{  $Email=null;   } 
        

    #cidade DB users e cadastro(idoso)
    if(isset($_POST['cidade'])){ 
        $Cidade1=filter_input(INPUT_POST,'cidade',FILTER_SANITIZE_SPECIAL_CHARS); 
    }elseif(isset($_GET['cidade'])){ 
        $Cidade1=filter_input(INPUT_GET,'cidade',FILTER_SANITIZE_SPECIAL_CHARS); 
    }else{  $Cidade1=null;   }
    $Cidade=$filter->filterVariavel($Cidade1);

    # bairro DB users e cadastro(idoso)
    if(isset($_POST['bairro'])){ 
        $Bairro1=filter_input(INPUT_POST,'bairro',FILTER_SANITIZE_SPECIAL_CHARS); 
    }elseif(isset($_GET['bairro'])){ 
        $Bairro1=filter_input(INPUT_GET,'bairro',FILTER_SANITIZE_SPECIAL_CHARS); 
    }else{ $Bairro1=null;  }
    $Bairro=$filter->filterVariavel($Bairro1);


    # categoria DB cadastro(idoso)
    if(isset($_POST['categoria'])){ 
        $Categoria=filter_input(INPUT_POST, 'categoria',FILTER_SANITIZE_SPECIAL_CHARS);  }
    elseif(isset($_GET['categoria'])){ 
        $Categoria=filter_input(INPUT_GET,'categoria',FILTER_SANITIZE_SPECIAL_CHARS);  }
    else{ $Categoria=null;  }

   /* # Radio para questionamento sobre Atendimento à distância DB users e users_idoso
    if(isset($_POST['on'])){ 
        $On=filter_input(INPUT_POST,'on',FILTER_SANITIZE_SPECIAL_CHARS); 
    }elseif(isset($_GET['on'])){ 
        $On=filter_input(INPUT_GET,'on',FILTER_SANITIZE_SPECIAL_CHARS); 
    }else{ $On=null;  }

    # Radio para questionamento sobre Atendimento à distância DB users e users_idoso
    if(isset($_POST['aa'])){ 
        $Aa=filter_input(INPUT_POST,'aa',FILTER_SANITIZE_SPECIAL_CHARS); 
    }elseif(isset($_GET['ead'])){ 
        $Aa=filter_input(INPUT_GET,'aa',FILTER_SANITIZE_SPECIAL_CHARS); 
    }else{ $Aa=null;  }*/

    # Radio para questionamento sobre Atendimento à distância DB users e users_idoso
    if(isset($_POST['priority'])){ 
        $Aa=filter_input(INPUT_POST,'priority',FILTER_SANITIZE_SPECIAL_CHARS); }
    elseif(isset($_GET['priority'])){ 
        $Aa=filter_input(INPUT_GET,'priority',FILTER_SANITIZE_SPECIAL_CHARS);  }
    else{ $Aa=null;  }
    

    //Input Senha
    if(isset($_POST['senha'])){ $senha=$_POST['senha'];  $hashSenha=$objPass->passwordHash($senha); }
    else{  $senha=null;   $hashSenha=null;   }

    #Input Confirmacao de Senha
    if(isset($_POST['senhaConf'])){ $senhaConf=$_POST['senhaConf'];   }
    else{   $senhaConf=null;   }   

    #Input data de Criacao 
    date_default_timezone_set('America/Sao_Paulo');
    $dataCreated=date("Y-m-d H:i:s", time());
    
    #Esqueci minha senha - Recuperação
    $token=bin2hex(random_bytes(64));
       
    if(isset($_POST['token'])){  $token=$_POST['token'];  }
    else{   $token=bin2hex(random_bytes(64));  }

    #Array para inserção no banco de dados
    $arrayVar=[
        "nome"=>$Nome,
        "email"=>$Email,
        "cidade"=>$Cidade,
        "bairro"=>$Bairro,
        "contato"=>$Contato,
        "senha"=>$senha,
        "hashSenha"=>$hashSenha,
        "dataCreated"=>$dataCreated,
        "token"=>$token
    ];


    