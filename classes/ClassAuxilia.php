<?php 
    namespace Classes;

    class ClassAuxilia{
        
         #filter caracteres especiais
         public function filterVariavel($name){

            // matriz de entrada
            $what = array('ä','ã','à','á','â','ê','ë','è','é','ï','ì','í','ö','õ','ò','ó','ô','ü','ù','ú','û','À','Á','É','Í','Ó','Ú','ñ','Ñ','ç','Ç',
                          '-','(',')',',',';',':','|','!','"','#','$','%','&','/','=','?','~','^','>','<','ª','º');

            // matriz de saída
            $by   = array('a','a','a','a','a','e','e','e','e','i','i','i','o','o','o','o','o','u','u','u','u','A','A','E','I','O','U','n','n','c','C',
                          '_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_');

            // devolver a string substituidas
            $filter_name = str_replace($what, $by, $name);

            //Retorna com devidos tratamentos
            return trim($filter_name);
                       
        }

        #filter contato celular
        public function filterContact($contact){
            
            $what =array('-',);
            $by   =array('');

            return  str_replace($what, $by, $contact);
    
        }

        #Calc idade
        public function age($data_nascimento){
            
            $dataNascimento = new DateTime($data);
            $dateNow = new DateTime();

            $dateNow->diff($dataNascimento);

            $age = $dateNow;
            
            return $age->y;
        }
    
    }