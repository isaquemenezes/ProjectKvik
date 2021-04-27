<?php
    namespace Models;

    class ModelCadastro extends ModelCrud{

        #Realizará a inserção no banco de dados
        public function insertCad($arrayVar)
        {
            $this->insertDB("users", "?,?,?,?,?,?,?,?,?,?",
                        array(0,
                              $arrayVar['nome'],
                              $arrayVar['email'],
                              $arrayVar['cidade'],
                              $arrayVar['bairro'],
                              $arrayVar['contato'],
                              $arrayVar['hashSenha'],
                              $arrayVar['dataCreated'],
                              'user',
                              'confirmation'
                            )
                );
                /********  RECUPERACAO DE SENHA ********/
                $this->insConfirmation($arrayVar);  
        }

        #Realizará a inserção no banco de dados
        public function insertCadIdoso($array_idoso)
        {
            $this->insertDB("users_idoso", "?,?,?,?,?,?,?,?,?,?",
                        array(0,
                            $array_idoso['fk_users'],
                            $array_idoso['nome'],
                            $array_idoso['sexo'],
                            $array_idoso['anoNascimento'],
                            $array_idoso['cidade'],
                            $array_idoso['bairro'],
                            $array_idoso['categoria'],
                            $array_idoso['aa'],
                            $array_idoso['dataCreated']
                             )
                 );
                
        }
        
        /********  RECUPERACAO DE SENHA ********/
        #Inserção de confirmação
        public function insConfirmation($arrayVar){

            $this->insertDB("confirmation", "?,?,?", array(0, $arrayVar['email'], $arrayVar['token']));
        }
        
        public function confirmationSen($email, $token, $hashSenha){
            
            $b=$this->selectDB("*","confirmation", "where email=? and token=?", array($email, $token));
            $r=$b->rowCount();

            if($r >0)
            {  
                $this->deleteDB("confirmation", "email=?",array($email));
                $this->updateDB("users", "senha=?", "email=?", array($hashSenha, $email));
                return true;
            }else{  return false;  }
        }

        #Veriricar se já existe o mesmo email cadastro no db
        public function getIssetEmail($email)
        {
            $b=$this->selectDB("*", "users", "where email=?", array($email));
            return $r=$b->rowCount();
        }

        #Verificar a confirmação de cadastro pelo email
        public function confirmationCad($email, $token){
            $b=$this->selectDB("*", "confirmation",  "where email=? and token=?", array($email, $token));
            $r=$b->rowCount();

            if($r >0){  
                $this->deleteDB("confirmation", "email=?", array($email));
                $this->updateDB("users", "status=?", "email=?", array("active", $email));
                
                return true;
            
            } else {  
                return false;  
            }
        }

    }
   