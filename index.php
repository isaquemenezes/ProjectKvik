<?php
    header("Content-Type: text/html; charset=utf-8");  
    date_default_timezone_set("America/Sao_Paulo");  //Set fuso horário 
    //error_reporting(0);        //Oculta Erros para os users

    include ("config/config.php");  
    include (DIRREQ."lib/vendor/autoload.php");
    include (DIRREQ."helpers/variables.php");  
 
    $dispatch = new Classes\ClassDispatch();  //configuração para localhost(index da viws)
    include ($dispatch ->getInclusao());       //configuração para index da viws)
    //include ($dispatch ->getInclusaoTemp());   // Index temporária
     
    