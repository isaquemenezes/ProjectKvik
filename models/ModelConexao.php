<?php
    namespace Models;

    abstract class ModelConexao{

        protected function conectaDB()
        {
            try{
                $con=new \PDO("mysql:host=".HOST.";dbname=".DB."; charset=utf8mb4","".USER."","".PASS."");
                return $con;
            }catch (\PDOException $erro){
                return $erro->getMessage();
            }
        }
    }
    header('Content-Type: text/html; charset=UTF-8');