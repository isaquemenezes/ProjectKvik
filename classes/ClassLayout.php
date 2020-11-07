<?php
    namespace Classes;

    class ClassLayout{

        #Área, somente Usuário Longado
        public static function setHeadRestrito(){
            $session=new ClassSessions();
            $session->verifyInsideSession();
        }

        #Setar as tags do head
        public static function setHead($title, $description , $author='kvik'){
            $html="<!doctype html>\n";
            $html.="<html lang='pt-br'>\n";
            $html.="<head>\n";
            $html.="  <meta charset='UTF-8'>\n";
            $html.="  <meta name='viewport' content='width=device-width, initial-scale=1'>\n";
            $html.="  <meta name='author' content='$author'>\n";
            $html.="  <meta name='format-detection' content='telephone=no'>\n";
            $html.="  <meta name='description' content='$description'>\n";
            $html.="  <title>$title</title>\n";
            
            $html.="  <link rel='icon' type='image/png' href='".DIRPAGE."./assets/logo.ico'>\n"; 
            $html.="  <link rel='stylesheet' href='".DIRCSS."main.css'>\n";
            $html.="  <link rel='stylesheet' href='".DIRCSS."style.css'>\n";
            $html.="  <link rel='stylesheet' href='".DIRCSS."style-icon.css'>\n";
            
            $html.="</head>\n\n";
            $html.="<body> \n";
            echo $html;
        } 
        
        #Setar as tags do head
        public static function setHeadSubPage($title, $description , $author='kvik'){
            $html="<!doctype html>\n";
            $html.="<html lang='pt-br'>\n";
            $html.="<head>\n";
            $html.="  <meta charset='UTF-8'>\n";
            $html.="  <meta name='viewport' content='width=device-width, initial-scale=1'>\n";
            $html.="  <meta name='author' content='$author'>\n";
            $html.="  <meta name='format-detection' content='telephone=no'>\n";
            $html.="  <meta name='description' content='$description'>\n";
            $html.="  <title>$title</title>\n";
            
            $html.="  <link rel='icon' type='image/png' href='".DIRPAGE."./assets/logo.ico'>\n"; 
            $html.="  <link rel='stylesheet' href='".DIRCSS."main.css'>\n";
            $html.="  <link rel='stylesheet' href='".DIRCSS."style.css'>\n";
            $html.="  <link rel='stylesheet' href='".DIRCSS."style-icon.css'>\n";
            $html.="</head>\n\n";
            $html.="<body class='subpage'> \n";
            echo $html;
        }       

        #Setar as tags do footer
        public static function setFooter(){
            $html="<script src='".DIRJS."jquery.min.js'></script>\n";
            $html.="<script src='".DIRJS."javascript.js'></script>\n";
            $html.="<script src='".DIRJS."jquery.scrollex.min.js'></script>\n";
            $html.="<script src='".DIRJS."skel.min.js'></script>\n";
            $html.="<script src='".DIRJS."util.js'></script>\n";            
            $html.="<script src='".DIRJS."main.js'></script>\n";
            $html.="<script src='".DIRJS."kvik_menu.js'></script>\n";
            //$html.="<script src='https://kit.fontawesome.com/a076d05399.js'></script>\n"; //icons Square
            $html.="</body>\n";
            $html.="</html>";
            echo $html;
           
        }
    }