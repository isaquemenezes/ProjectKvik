<?php 
    namespace Classes;

    use Models\ModelCadastro;
    use Models\ModelLogin;
    use Classes\ClassPassword;
    use Classes\ClassSessions;
    use Classes\ClassMail; 

    class ClassAuxilia{
        
        public function filterVariavel($name){
            $name=$name;

            $com_acentos=array('Á', 'Ã', 'À', 'á', 'â','ã', 'É', 'é', 'Í', 'í', 'Ó', 'Ô', 'ó', 'ô',
            'Ú', 'ú', 'Ê', 'ç', 'Ç');
            $sem_acentos=array('A', 'A', 'A', 'a', 'a', 'a', 'E', 'e', 'I', 'i', 'O', 'O', 'o', 'o',
            'U','u','E', 'c', 'C');

            $filterAcentos_name=str_replace($com_acentos, $sem_acentos, $name);		
            $filter_espaco_branco=trim($filterAcentos_name);
            $filter_name=$filter_espaco_branco;
            
            
            return  $filter_name;            
        }
    
    }