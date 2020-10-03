<?php 
    namespace Classes;

    use Models\ModelCadastro;
    use Models\ModelLogin;
    use Classes\ClassPassword;
    use Classes\ClassSessions;
    use Classes\ClassMail; 

    class ClassAuxilia{
        public function removeAcento($string){            
            $acentos=array('Á', 'á', 'É', 'é', 'Í', 'í', 'Ó', 'Ô', 'ó', 'ô',
                            'Ú', 'ú', 'â','ã','Ê');
            $sem_acentos=array('A','a','E','e','I','i','O','O','o','o',
                            'U','u','a','a','E');

            return str_replace($acentos, $sem_acentos, $string);			
        }
    

    }