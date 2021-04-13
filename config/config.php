<?php
#Caminhos absolutos
$pastaInterna="ProjectKvik/";
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");
(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/')?$barra="":$barra="/";
define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$barra}{$pastaInterna}");

#Atalhos
define('DIRCSS',DIRPAGE.'assets/css/');
define('DIRIMG',DIRPAGE.'assets/images/');
define('DIRJS',DIRPAGE.'assets/js/');

#Acesso ao db
define('HOST',"localhost");
define('DB',"sistema_kvik");
define('USER',"root");
define('PASS',"");

#Informações do servidor de email
define("HOSTMAIL","");
define("USERMAIL","");
//define("PASSMAIL","");
define("PASSMAIL","");
define ("MAIL",[
    "from_name" => "Equipe kvik",
    "from_email" => ""
]);


#Outros
define("DOMAIN",$_SERVER["HTTP_HOST"]);