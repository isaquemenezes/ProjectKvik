<?php
    header("Content-Type: text/html; charset=utf-8");  
    date_default_timezone_set("America/Sao_Paulo");  //Set fuso horário 
    //error_reporting(0);        //Oculta Erros para os users

    include ("config/config.php");  
    include (DIRREQ."library/vendor/autoload.php");
    include (DIRREQ."helpers/variables.php");  
 
    $dispatch = new Classes\ClassDispatch();  
    
    /*configuração para index da views*/
    //sem argumento . index principal, com todas as funcionalidades
    //argumento 1 . index_1 page de divulgação do project
    //argumento 2 . index_2 page de site em manutençao
    include ($dispatch ->getInclusao());       
     