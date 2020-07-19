<?php
    namespace Classes;

    class ClassLayout{

        #Área Restrito: Usuário Longado
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
            $html.="  <link rel='stylesheet' href='".DIRPAGE."./assets/css/animate.css'>\n";
            $html.="  <link rel='stylesheet' href='".DIRPAGE."./assets/css/common.css'>\n";
            $html.="  <link rel='stylesheet' href='".DIRPAGE."./assets/css/corporate.css'>\n";
            $html.="  <link rel='stylesheet' href='".DIRPAGE."./assets/css/variables-corporate.css'>\n";
            $html.="  <link rel='stylesheet' href='".DIRPAGE."./asset/css/fileinput.min.css'>\n";
            $html.="  <link rel='stylesheet' href='".DIRPAGE."./assets/css/main.css'>\n";
            $html.="  <link rel='stylesheet' href='".DIRPAGE."./assets/css/main2.css'>\n";
            $html.="  <link rel='stylesheet' href='".DIRPAGE."./assets/css/reset.css'>\n";
            $html.="  <link rel='stylesheet' href='".DIRPAGE."./assets/css/configSvg.css'>\n";
                
            $html.="<style>

            /*
            @font-face {
            font-family: 'poppinsregular';
            src: url(/assets/poppin/poppins-regular-webfont.woff2) format('woff2'),
            url(/assets/poppin/poppins-regular-webfont.woff) format('woff');
            font-weight: normal;
            font-style: normal;
            }
            @font-face {
            font-family: 'poppinslight';
            src: url(/assets/poppin/poppins-light-webfont.woff2) format('woff2'),
            url(/assets/poppin/poppins-light-webfont.woff) format('woff');
            font-weight: normal;
            font-style: normal;
            }
            @font-face {
            font-family: 'poppinsthin';
            src: url(/assets/poppin/poppins-thin-webfont.woff2) format('woff2'),
            url(/assets/poppin/poppins-thin-webfont.woff) format('woff');
            font-weight: normal;
            font-style: normal;
            }
            */
            #mainnavbar {<!-- background-image: url(/assets/img-general/nav-corporate.jpg); -->	}
            .section-null { padding:0; margin:0; background-color: #FFF;}
            .section-blue {	background-image: url(/assets/img-general/nav-corporate.jpg);}
            .section-grey, .section-white, .section-grey-bis, .section-white-bis { background-repeat: no-repeat; background-size: contain; -webkit-background-size: contain;}
            .section-white, .section-white-bis, .section-white-white { background-color: #FFFFFF;}
            .section-grey, .section-grey-bis, .section-grey-grey { background-color: #f4f4f4;}
            .section-grey {	background-image: url(/assets/img-corporate/elements/section-gray-top-right.png);}
            .section-white {background-image: url(/assets/img-corporate/elements/section-gray-bottom-left.png);}
            .section-grey-bis {	background-image: url(/assets/img-corporate/elements/section-gray-top-left.png);}
            .section-white-bis {background-image: url(/assets/img-corporate/elements/section-gray-bottom-right.png);}

            @media (min-width: 576px) {
                .section-grey {	padding-top: 120px;	padding-bottom: 20px;}
                .section-white {padding-top: 100px;	padding-bottom: 0px;}
            }
            @media (min-width: 768px) {
                .section-grey {	padding-top: 120px;	padding-bottom: 20px;}
                .section-white { padding-top: 100px; padding-bottom: 0px;}
            }
            @media (min-width: 992px) {
                .section-grey { padding-top: 140px;	padding-bottom: 20px; }
                .section-white { padding-top: 120px; padding-bottom: 0px;}
            }
            @media (min-width: 1200px) {
                .section-grey { padding-top: 180px; padding-bottom: 20px; }
                .section-white { padding-top: 160px; padding-bottom: 0px; }
            }

            header, #mainnavbar.fixed-top, #footer, body#login { background-image: url(./assets/images/pessoa_com_cadeira.jpg);	background-color: #31708f;}
            body#login { background-size: cover; }
            a.banner-button-buy { border: 0px; background-color: #F6821F; border-radius: 3px; color: #FFF; font-weight: bold; }
                body.part_legal main { background: #F5F8FA;}
            body.part_legal p,
            body.part_legal dt,
            body.part_legal dd {color: #474949;	}
            body.part_legal h2 {font-size: 1.2em !important;text-transform: uppercase;color: #09364C;}
            body.part_legal main ul {list-style-type: lower-alpha;	<!-- padding-inline-start:0; -->}
            body.part_legal main li {display: list-item;color: #474949;	}
            body.part_legal main table {width: 100%;border-color: #474949;border-width: 0px;margin: 15px 0 15px 0;}
            body.part_legal main td, body.part_legal main th {border-color: #CCC;border-width: 1px;	margin: 15px 0 15px 0;padding: 10px;}
            body.part_legal main th {border-color: #FFF; background-color: #CCC; border-width: 1px; margin: 15px 0 15px 0; padding: 10px;}
            body.part_privacy main { background: #F5F8FA;}
            body.part_privacy p,
            body.part_privacy dt,
            body.part_privacy dd { color: #474949; }
            body.part_privacy h2 { font-size: 1.2em !important; text-transform: uppercase; color: #09364C; }
            body.part_privacy main ul { list-style-type: lower-alpha; <!-- padding-inline-start:0; -->	}
            body.part_privacy main li { display: list-item;	color: #474949;	}
            body.part_privacy main table {width: 100%; border-color: #474949; border-width: 0px; margin: 15px 0 15px 0;}
            body.part_privacy main td, body.part_privacy main th {border-color: #CCC; border-width: 1px; margin: 15px 0 15px 0; padding: 10px;}
            body.part_privacy main th {	border-color: #FFF;	background-color: #CCC;	border-width: 1px; margin: 15px 0 15px 0; padding: 10px;}
            body.part_policy main { background: #F5F8FA;}
            body.part_policy p,
            body.part_policy dt,
            body.part_policy dd { color: #474949; }
            body.part_policy h2 { font-size: 1.2em !important; text-transform: uppercase; color: #09364C; }
            body.part_policy main ul { list-style-type: lower-alpha; <!-- padding-inline-start:0; --> }
            body.part_policy main li { display: list-item; color: #474949; }
            body.part_policy main table {width: 100%;border-color: #474949;border-width: 0px;margin: 15px 0 15px 0;}
            body.part_policy main td, body.part_policy main th {border-color: #CCC;	border-width: 1px;margin: 15px 0 15px 0;padding: 10px;}
            body.part_policy main th {border-color: #FFF;background-color: #CCC;border-width: 1px;margin: 15px 0 15px 0;padding: 10px;}
            </style>\n";
        
            $html.="</head>\n\n";
            $html.="<body> \n";
            echo $html;
        }

        #setHead2
        public static function setHead3($title, $description , $author='kvik'){
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
            $html.="  <link rel='stylesheet' href='".DIRPAGE."./assets/css/animat.css'>\n";
            $html.="  <link rel='stylesheet' href='".DIRPAGE."./assets/css/commo.css'>\n";
            $html.="  <link rel='stylesheet' href='".DIRPAGE."./assets/css/corporat.css'>\n";
            $html.="  <link rel='stylesheet' href='".DIRPAGE."./assets/css/variables-corporat.css'>\n";
            $html.="  <link rel='stylesheet' href='".DIRPAGE."./asset/css/fileinpu.min.css'>\n";
            $html.="  <link rel='stylesheet' href='".DIRPAGE."./assets/css/main.css'>\n";
            $html.="  <link rel='stylesheet' href='".DIRPAGE."./assets/css/main3.css'>\n";
            $html.="  <link rel='stylesheet' href='".DIRPAGE."./assets/css/rese.css'>\n";
            $html.="  <link rel='stylesheet' href='".DIRPAGE."./assets/css/configSvg.css'>\n";
                

            $html.="<style>

                /*
                @font-face {
                font-family: 'poppinsregular';
                src: url(/assets/poppin/poppins-regular-webfont.woff2) format('woff2'),
                url(/assets/poppin/poppins-regular-webfont.woff) format('woff');
                font-weight: normal;
                font-style: normal;
                }
                @font-face {
                font-family: 'poppinslight';
                src: url(/assets/poppin/poppins-light-webfont.woff2) format('woff2'),
                url(/assets/poppin/poppins-light-webfont.woff) format('woff');
                font-weight: normal;
                font-style: normal;
                }
                @font-face {
                font-family: 'poppinsthin';
                src: url(/assets/poppin/poppins-thin-webfont.woff2) format('woff2'),
                url(/assets/poppin/poppins-thin-webfont.woff) format('woff');
                font-weight: normal;
                font-style: normal;
                }
                */
                #mainnavbar {<!-- background-image: url(/assets/img-general/nav-corporate.jpg); -->	}
                .section-null { padding:0; margin:0; background-color: #FFF;}
                .section-blue {	background-image: url(/assets/img-general/nav-corporate.jpg);}
                .section-grey, .section-white, .section-grey-bis, .section-white-bis { background-repeat: no-repeat; background-size: contain; -webkit-background-size: contain;}
                .section-white, .section-white-bis, .section-white-white { background-color: #FFFFFF;}
                .section-grey, .section-grey-bis, .section-grey-grey { background-color: #f4f4f4;}
                .section-grey {	background-image: url(/assets/img-corporate/elements/section-gray-top-right.png);}
                .section-white {background-image: url(/assets/img-corporate/elements/section-gray-bottom-left.png);}
                .section-grey-bis {	background-image: url(/assets/img-corporate/elements/section-gray-top-left.png);}
                .section-white-bis {background-image: url(/assets/img-corporate/elements/section-gray-bottom-right.png);}

                @media (min-width: 576px) {
                    .section-grey {	padding-top: 120px;	padding-bottom: 20px;}
                    .section-white {padding-top: 100px;	padding-bottom: 0px;}
                }
                @media (min-width: 768px) {
                    .section-grey {	padding-top: 120px;	padding-bottom: 20px;}
                    .section-white { padding-top: 100px; padding-bottom: 0px;}
                }
                @media (min-width: 992px) {
                    .section-grey { padding-top: 140px;	padding-bottom: 20px; }
                    .section-white { padding-top: 120px; padding-bottom: 0px;}
                }
                @media (min-width: 1200px) {
                    .section-grey { padding-top: 180px; padding-bottom: 20px; }
                    .section-white { padding-top: 160px; padding-bottom: 0px; }
                }

                header, #mainnavbar.fixed-top, #footer, body#login { background-image: url(./assets/images/pessoa_com_cadeira.jpg);	background-color: #31708f;}
                body#login { background-size: cover; }
                a.banner-button-buy { border: 0px; background-color: #F6821F; border-radius: 3px; color: #FFF; font-weight: bold; }
                    body.part_legal main { background: #F5F8FA;}
                body.part_legal p,
                body.part_legal dt,
                body.part_legal dd {color: #474949;	}
                body.part_legal h2 {font-size: 1.2em !important;text-transform: uppercase;color: #09364C;}
                body.part_legal main ul {list-style-type: lower-alpha;	<!-- padding-inline-start:0; -->}
                body.part_legal main li {display: list-item;color: #474949;	}
                body.part_legal main table {width: 100%;border-color: #474949;border-width: 0px;margin: 15px 0 15px 0;}
                body.part_legal main td, body.part_legal main th {border-color: #CCC;border-width: 1px;	margin: 15px 0 15px 0;padding: 10px;}
                body.part_legal main th {border-color: #FFF; background-color: #CCC; border-width: 1px; margin: 15px 0 15px 0; padding: 10px;}
                body.part_privacy main { background: #F5F8FA;}
                body.part_privacy p,
                body.part_privacy dt,
                body.part_privacy dd { color: #474949; }
                body.part_privacy h2 { font-size: 1.2em !important; text-transform: uppercase; color: #09364C; }
                body.part_privacy main ul { list-style-type: lower-alpha; <!-- padding-inline-start:0; -->	}
                body.part_privacy main li { display: list-item;	color: #474949;	}
                body.part_privacy main table {width: 100%; border-color: #474949; border-width: 0px; margin: 15px 0 15px 0;}
                body.part_privacy main td, body.part_privacy main th {border-color: #CCC; border-width: 1px; margin: 15px 0 15px 0; padding: 10px;}
                body.part_privacy main th {	border-color: #FFF;	background-color: #CCC;	border-width: 1px; margin: 15px 0 15px 0; padding: 10px;}
                body.part_policy main { background: #F5F8FA;}
                body.part_policy p,
                body.part_policy dt,
                body.part_policy dd { color: #474949; }
                body.part_policy h2 { font-size: 1.2em !important; text-transform: uppercase; color: #09364C; }
                body.part_policy main ul { list-style-type: lower-alpha; <!-- padding-inline-start:0; --> }
                body.part_policy main li { display: list-item; color: #474949; }
                body.part_policy main table {width: 100%;border-color: #474949;border-width: 0px;margin: 15px 0 15px 0;}
                body.part_policy main td, body.part_policy main th {border-color: #CCC;	border-width: 1px;margin: 15px 0 15px 0;padding: 10px;}
                body.part_policy main th {border-color: #FFF;background-color: #CCC;border-width: 1px;margin: 15px 0 15px 0;padding: 10px;}
                </style>\n";

            $html.="</head>\n\n";
            $html.="<body> \n";
            echo $html;
        }

        #Setar as tags do footer
        public static function setFooter(){
            $html="<script src='".DIRPAGE."assets/js/jquery-3.3.1.min.js'></script>\n";
            $html.="<script src='".DIRPAGE."assets/js/zepto.min.js'></script>\n";
            $html.="<script src='".DIRPAGE."assets/js/javascript.js'></script>\n";            
            $html.="</body>\n";
            $html.="</html>";
            echo $html;
        }
    }