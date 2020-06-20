<?php
    header("Content-Type: text/html; charset=utf-8");

    include ("config/config.php");  
    include (DIRREQ."lib/vendor/autoload.php");
    include (DIRREQ."helpers/variables.php");  
 
    $dispatch = new Classes\ClassDispatch();  //configuração para localhost(index da viws)
    include($dispatch ->getInclusao());  //configuração para localhost(index da viws)
    
     
    