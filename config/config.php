<?php
#Caminhos absolutos
$pastaInterna="ProjectKvik/";
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");
(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/')?$barra="":$barra="/";
define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$barra}{$pastaInterna}");

#Atalhos
define('DIRCSS',DIRPAGE.'assets/css/main.css');
define('DIRIMG',DIRPAGE.'assets/images/');
define('DIRJS',DIRPAGE.'assets/js/');

#Acesso ao db
define('HOST',"localhost");
define('DB',"sistema");
define('USER',"root");
define('PASS',"");

#Informações do servidor de email
define("HOSTMAIL","HOSTMAIL DO SEU PROVEDOR DE EMAIL");
define("USERMAIL","USUÁRIO DO EMAIL");
define("PASSMAIL","");

#Outras informações GOOGLE CAPTACHA
define("SITEKEY", "6LdU-t8UAAAAAPk2EVlzqCvpa3QZ05cOa7TOmH_X");
define("SECRETKEY","6LdU-t8UAAAAAMRDDgUHX2t-BXY9Q7NQpqWoXMPY");

#Outros
define("DOMAIN",$_SERVER["HTTP_HOST"]);