<?php
    namespace Models;

    abstract class ModelConexao{

        protected function conectaDB()
        {
            try{
                $connect=new \PDO("mysql:host=".HOST.";dbname=".DB."; charset=utf8","".USER."","".PASS."");
                return $connect;
            }catch (\PDOException $erro){
                return $erro->getMessage();
            }
        }
    }
  