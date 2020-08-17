<?php
    $validate=new \Classes\ClassValidate();
    $confirmation=new \Models\ModelCadastro();

        if($validate->validateConfSenha($senha, $senhaConf)){

            if($confirmation->confirmationSen($email, $token, $hashSenha)){
                echo "<script> alert('Senha foi alterada com sucesso!');</script>";
            }else {
                    echo "<script> alert('Não foi possível verificar seus dados!');</script>";
            }
        }else{
            echo "<script> alert('Senha diferente de confirmação de senha!');</script>";
        }
    
    echo "<script> window.location.href='".DIRPAGE."';</script>";