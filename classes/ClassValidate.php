<?php
    namespace Classes;

    use Models\ModelCadastro;
    use Models\ModelLogin;
    use Classes\ClassPassword;
    use Classes\ClassSessions;
    //use Classes\ClassMail; // email de confirmação 
   

    class ClassValidate{

        private $erro=[]; //Armazana todos os erros
        private $cadastro;
        private $password;
        private $login;
        private $tentativas;
        private $session;
        private $mail;  // envio de email de confirmção

        //composições
        public function __construct(){

            $this->cadastro=new ModelCadastro(); 
            $this->password=new ClassPassword();
            $this->login=new ModelLogin();
            $this->session=new ClassSessions();
            $this->mail=new ClassMail();

        }

        public function getErro(){  return $this->erro;   }
        public function setErro($erro){   array_push($this->erro,$erro);   }

        #Validar se os campos desejados foram preenchidos
        public function validateFields($par){
            $i=0;
            foreach ($par as $key => $value){
                if(empty($value)){
                    $i++;
                }
            }
            if($i==0){
                return true;
            }else{
                $this->setErro("Preencha todos os dados!");
                return false;
            }
        }// CLOSE Validar se os campos desejados foram preenchidos

        #Validação se o dado é um email
        public function validateEmail($par){

            if(filter_var($par, FILTER_VALIDATE_EMAIL)){  return true;   }
            else{  $this->setErro("Email inválido!");  return false;  }
        
        }//CLOSE  Validação se o dado é um email

        #Validar se o email existe no banco de dados (action null para cadastro)
        public function validateIssetEmail($email,$action=null){

            $b=$this->cadastro->getIssetEmail($email);

            if($action==null){
                if($b > 0){
                    $this->setErro("Email já cadastrado!");
                    return false;
                }else{
                    return true;
                }
            }else{ //login 
                if($b > 0){
                    return true;
                }else{
                    $this->setErro("Email não cadastrado!");
                    return false;
                }
            }
        }//CLOSSE Validar se o email existe no banco de dados 

        #Verificar se a senha é igual a confirmação de senha
        public function validateConfSenha($senha,$senhaConf){

            if($senha === $senhaConf){  return true;  }
            else{ $this->setErro("Senha diferente de confirmação de senha!"); }

        }

        #Verificação da senha digitada com o hash no banco de dados
        public function validateSenha($email,$senha)
        {
            if($this->password->verifyHash($email,$senha)){  return true;  }
            else{  $this->setErro("Usuário ou Senha Inválidos!"); return false;  }
        }

        #Validação final do cadastro
        public function validateFinalCad($arrayVar)
        {
            if(count($this->getErro())>0){
                $arrayResponse=[
                    "retorno"=>"erro",
                    "erros"=>$this->getErro()
                ];
            }else{
                $arrayResponse=[
                    "retorno"=>"success",
                    "erros"=>null
                ];
                $this->cadastro->insertCad($arrayVar);
                
            }
            return json_encode($arrayResponse);

        }

       

        /*#Validação final do cadastro com email de confirmacao
        public function validateFinalCad($arrayVar)
        {
            if(count($this->getErro())>0){
                $arrayResponse=[
                    "retorno"=>"erro",
                    "erros"=>$this->getErro()
                ];
            }else{
                $this->mail->sendMail(
                    $arrayVar['email'],
                    $arrayVar['nome'],
                    $arrayVar['token'],
                    "Confirmação de Cadastro",
                    "
                    <strong>Cadastro do Site</strong><br>
                    Confirme seu email <a href='".DIRPAGE."controllers/controllerConfirmacao/{$arrayVar['email']}/{$arrayVar['token']}'>clicando aqui</a>.
                    "
                );
                $arrayResponse=[
                    "retorno"=>"success",
                    "erros"=>null
                ];
                $this->cadastro->insertCad($arrayVar);
            }
            return json_encode($arrayResponse);
        }*/

        #Validação das tentativas
        public function validateAttemptLogin()
        {
            if($this->login->countAttempt() >= 5){
                $this->setErro("Você realizou mais de 5 tentativas!\nTente Novamente Depois.");
                $this->tentativas=true;
                return false;
            }else{
                $this->tentativas=false;
                return true;
            }
        }

        #Validação final do login
        public function validateFinalLogin($email)
        {
            if(count($this->getErro()) >0){
                $this->login->insertAttempt();

                $arrayResponse=[
                    "retorno"=>"erro",
                    "erros"=>$this->getErro(),
                    "tentativas"=>$this->tentativas
                ];
            }else{
                $this->login->deleteAttempt();
                $this->session->setSessions($email);

                $arrayResponse=[
                    "retorno"=>"success",
                    "page"=>'home',
                    "tentativas"=>$this->tentativas
                ];
            }
            return json_encode($arrayResponse);
        }


        #Método de validação de confirmação de email 24
        public function validateUserActive($email){

            $user=$this->login->getDataUser($email);
            if($user["data"]["status"] == "confirmation"){
                //Verificar a data de criacao do usuário - para ativação do cadastro pelo email
                if(strtotime($user["data"]["dataCreate"])<= strtotime(date("Y-m-d H:i:s"))-432000){
                    $this->setErro("Ative seu cadastro pelo link do email");
                    return false;
                }else{
                    return true;
                }
            }else{
                return true;
            }
        }


        #Validação se o email é igual ao email do banco de dados
        public function validateEmailRecuperaSenha($email)
        {
            $dataDb=$this->login->getDataUser($email)["data"]["email"];
            if($email == $dataDb){
                return true;
            }else{
                //$this->setErro("Email não confere com o usuário!");
                return false;
            }
        }

        #Validação final para Recuperação de senha
        public function validateFinalSen($arrayVar)
        {
            if(count($this->getErro())>0){
                $arrayResponse=[
                    "retorno"=>"erro",
                    "erros"=>$this->getErro()
                ];
            }else{
                /*$this->mail->sendMail(
                    $arrayVar['email'],
                    $arrayVar['nome'],
                    $arrayVar['token'],
                    "Link para Confirmação de Senha",
                    "
                    <strong>Redefinação da Senha</strong><br>
                    Redefina sua senha <a href='".DIRPAGE."redefinicaoSenha/{$arrayVar['email']}/{$arrayVar['token']}'>clicando aqui</a>.
                    "
                );*/
                $arrayResponse=[
                    "retorno"=>"success",
                    "erros"=>null
                ];
                $this->cadastro->insConfirmation($arrayVar);
            }
            return json_encode($arrayResponse);
        }
    }//CLOSE class ClassValidate