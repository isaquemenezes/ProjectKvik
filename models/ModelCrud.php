<?php
    namespace Models;

    class ModelCrud extends ModelConexao{

        private $crud;

        #Responsável pela preparação da query e execução
        private function prepareExecute($prep, $exec){

            $this->crud=$this->conectaDB()->prepare($prep);
            $this->crud->execute($exec);
        }

        #Seleção de dados
        public function selectDB($fields, $table, $where, $exec){

            $this->prepareExecute("SELECT {$fields} FROM {$table} {$where}", $exec);
            return $this->crud;
        }

        #Inserção de dados
        public function insertDB($table, $values, $exec){

            $this->prepareExecute("INSERT INTO {$table} VALUES ({$values})", $exec);
            return $this->crud;
        }

        #Delete de dados
        public function deleteDB($table, $where, $exec){

            $this->prepareExecute("DELETE FROM {$table} WHERE {$where}", $exec);
            return $this->crud;
        }

        #Atualização de dados
        public function updateDB($table, $values, $where, $exec){
            
            $this->prepareExecute("UPDATE {$table} SET {$values} WHERE {$where}", $exec);
            return $this->crud;
        }
    }

/*
<?php
    include 'ClassConexao.php';

    class ClassCrud extends ClassConexao{
        private $crud;
        private $contador;

        #Preparação das declativas
        private function preparedStatements($Query, $Parametros){
            $this->countParametros($Parametros);
            $this->crud=$this->conectaDB()->prepare($Query);
            //echo  $this->contador;

            if($this->contador > 0){
                for($i=1; $i <= $this->contador; $i++){
                    $this->crud->bindValue($i, $Parametros[$i-1]);
                } 
            }
            $this->crud->execute();
        }

        #Contador de parâmetros
        private function countParametros($Parametros){
            $this->contador=count($Parametros);
        }

        #Inserção no Banco de Dados
        public function insertDB($tabela, $condicao, $parametros){
            $this->preparedStatements("INSERT INTO {$tabela} VALUES ({$condicao})", $parametros);
            return $this->crud;
        }

        #Seleção no Banco de Dados
        public function selectDB($campos, $tabela, $condicao, $parametros){
            $this->preparedStatements("SELECT {$campos} FROM {$tabela} {$condicao}", $parametros);
            return $this->crud;
        }

        #Deletar no Banco de Dados
        public function deleteDB($tabela, $condicao, $parametros){
            $this->preparedStatements("DELETE FROM {$tabela} WHERE {$condicao}", $parametros);
            return $this->crud;
        }

        #Update no Banco de Dados
        public function updateDB($tabela, $set, $condicao, $parametros){
            $this->preparedStatements("UPDATE {$tabela} SET {$set} WHERE {$condicao}", $parametros);
            return $this->crud;
        }

    }// CLOSE ClassCrud
    */