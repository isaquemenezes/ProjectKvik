<?php
    namespace Models;

    class ClassCadastro extends ClassCrud{

        #Realizará a inserção no banco de dados
        public function insertCad($arrayVar)
        {
            $this->insertDB(
                "users",
                "?,?,?,?,?,?,?,?,?",
                        array(
                            0,
                            $arrayVar['nome'],
                            $arrayVar['email'],
                            $arrayVar['cidade'],
                            $arrayVar['bairro'],
                            $arrayVar['hashSenha'],
                            //$arrVar['dataNascimento'],
                            //$arrVar['cpf'],
                            $arrayVar['dataCreate'],
                            'user',
                            'confirmation'
                        )
                );
                
                /********  RECUPERACAO DE SENHA ********/
                $this->insConfirmation($arrayVar);  
               

        }// CLOSE  Realizará a inserção no banco de dados
        
        /********  RECUPERACAO DE SENHA ********/
        #Inserção de confirmação
        public function insConfirmation($arrayVar)
        {
            $this->insertDB(
                "confirmation",
                "?,?,?",
                array(
                    0,
                    $arrayVar['email'],
                    $arrayVar['token']
                )
            );
        }// CLOSE RECUPERAÇÃO DE SENHA


        //MInhas modificacoes
        public function insertCadIdoso($arrayVar2){
            $this->insertDB(
                    "cadastro", 
                    "?,?,?,?,?,?",
                    array(
                        0,  
                        $arrayVar2['email'],
                        $arrayVar2['nome'],
                        $arrayVar2['anoNascimento'],
                        $arrayVar2['cidade'],
                        $arrayVar2['bairro'] ));

        }

        #Veriricar se já existe o mesmo email cadastro no db
        public function getIssetEmail($email)
        {
            $b=$this->selectDB(
                "*",
                "users",
                "where email=?",
                array(
                    $email
                )
            );
            return $r=$b->rowCount();
        }

        #Verificar a confirmação de cadastro pelo email
        /*
        public function confirmationCad($email,$token)
        {
            $b=$this->selectDB(
                "*",
                "confirmation",
                "where email=? and token=?",
                array(
                    $email,
                    $token
                )
            );
            $r=$b->rowCount();

            if($r >0){
                $this->deleteDB(
                    "confirmation",
                    "email=?",
                    array(
                        $email
                    )
                );

                $this->updateDB(
                    "users",
                    "status=?",
                    "email=?",
                    array(
                        "active",
                         $email
                    )
                );
                return true;
            }else{
                return false;
            }
        }*/





    }