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
define("HOSTMAIL","HOSTMAIL DO SEU PROVEDOR DE EMAIL");
define("USERMAIL","USUÁRIO DO EMAIL");
define("PASSMAIL","");


#Outros
define("DOMAIN",$_SERVER["HTTP_HOST"]);