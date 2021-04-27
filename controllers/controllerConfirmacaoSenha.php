<?php
    $validate=new \Classes\ClassValidate();
    $confirmation=new \Models\ModelCadastro();

        if($validate->validateConfSenha($senha, $senhaConf)){

            if($confirmation->confirmationSen($Email, $token, $hashSenha)){

                echo "<script> alert('Senha Alterada com Sucesso!');</script>";
                echo "<script> window.location.href='".DIRPAGEP."login'; </script>";

            }else {
                    echo "<script> alert('Não foi possível verificar seus dados!');</script>";
            }
        }else{

            echo "<script> alert('Senha diferente de confirmação de senha!');</script>";
            echo "<script> window.location.href='".DIRPAGEP."redefinicaoSenha/{$arrayVar['email']}/{$arrayVar['token']}';</script>";
        }
    
    