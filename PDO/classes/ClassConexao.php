<?php

   abstract class ClassConexao{
        protected function conectaDB(){
            try{ $conexao_db=new PDO("mysql:host=localhost;dbname=sistema", "root", ""); return $conexao_db;  }
            catch(PDOException $Erro){ return $Erro ->getMessage();  }
        }
        
    }
    