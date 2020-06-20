<?php
    include 'ClassConexao.php';

    // include ("{$_SERVER['DOCUMENT_ROOT']}/ProjectCrud/Class/ClassConexao.php"); Caminho Absoluto


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

    }
    