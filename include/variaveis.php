<?php

     if(isset($_POST['Acao'])){ 
          $Acao=filter_input(INPUT_POST,'Acao',FILTER_SANITIZE_SPECIAL_CHARS); 
     }
     elseif(isset($_GET['Acao'])){
          $Acao=filter_input(INPUT_GET,'Acao',FILTER_SANITIZE_SPECIAL_CHARS); 
     }
     else{
          $Acao="";
     }

    if(isset($_POST['Id'])){ 
        $Id=filter_input(INPUT_POST,'Id',FILTER_SANITIZE_SPECIAL_CHARS); 
    }
    elseif(isset($_GET['Id'])){
         $Id=filter_input(INPUT_GET,'Id',FILTER_SANITIZE_SPECIAL_CHARS); 
    }
    else{
         $Id=0;
    }

    if(isset($_POST['nome'])){
         $Nome=filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS); 
    }
    elseif(isset($_GET['nome'])){
         $Nome=filter_input(INPUT_GET,'nome',FILTER_SANITIZE_SPECIAL_CHARS); 
    }
    else{ 
        $Nome=""; 
    }

    if(isset($_POST['sexo'])){
         $Sexo=filter_input(INPUT_POST,'sexo',FILTER_SANITIZE_SPECIAL_CHARS); 
    }
    elseif(isset($_GET['sexo'])){ 
        $Sexo=filter_input(INPUT_GET,'sexo',FILTER_SANITIZE_SPECIAL_CHARS);
    }
    else{
         $Sexo=""; 
    }

    if(isset($_POST['cidade'])){ 
        $Cidade=filter_input(INPUT_POST,'cidade',FILTER_SANITIZE_SPECIAL_CHARS);
    }
    elseif(isset($_GET['cidade'])){
         $Cidade=filter_input(INPUT_GET,'cidade',FILTER_SANITIZE_SPECIAL_CHARS);
        }
    else{
         $Cidade=""; 
     }

     // Enquete
     if(isset($_POST['Radio'])){ 
          $Radio=filter_input(INPUT_POST,'Radio',FILTER_SANITIZE_SPECIAL_CHARS); 
     }
     elseif(isset($_GET['Radio'])){
          $Radio=filter_input(INPUT_GET,'Radio',FILTER_SANITIZE_SPECIAL_CHARS); 
     }
     else{
          $Radio="";
     }
