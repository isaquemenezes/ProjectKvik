<?php
    /**
     * 
     * Tentativa de mostrar notificação ao users
    */
    namespace Models;
    \Classes\ClassLayout::setHeadRestrito();   

    $crud =new ModelCrud();
    
    if(isset($id_con)){

        $email=$_SESSION['email'];
        
        //Select Db users
        $select_db = $crud->selectDB("*", "users", "WHERE email=?", array($email));
        $data_users=$select_db->fetch(\PDO::FETCH_ASSOC);
        
        $id_users=$data_users['id'];
        
        //var_dump($data_users);

        //Select db users_idoso
        $select_db2 = $crud->selectDB("*", "users_idoso", "WHERE id=?", array($id_con));
        $data_idoso=$select_db2->fetch(\PDO::FETCH_ASSOC);

        $id_idoso=$data_idoso['id'];

        //Insert db conexao
        $select_db = $crud->insertDB("conexao", "?,?,?", array(0,$id_users,  $id_con));
        
        //Select Db conexao
        $select_db_conexao = $crud->selectDB("*", "conexao", "", array());
        $rowCount=$select_db_conexao->rowCount();

        if($rowCount > 0 ){
            echo "<script>
                    alert('Sucesso!');
                    window.location.href='".DIRPAGE."';       
                </script>
            ";
        }else{
            echo "<script>
                    alert('Falho!');
                    window.location.href='".DIRPAGE."';       
                </script>
            ";
        }

    }
    if(isset($solicitation_id)){
        $id = $solicitation_id

         //Select Db conexao
         $select_db_conexao = $crud->deleteDB("*", "conexao", "WHERE id=?", array( $id));
         $rowCount=$select_db_conexao->rowCount();

         if($rowCount > 0 ){
            echo "<script>
                    alert('Sucesso!');
                    window.location.href='".DIRPAGE."';       
                </script>
            ";
        }else{
            echo "<script>
                    alert('Falho!');
                    window.location.href='".DIRPAGE."';       
                </script>
            ";
        }     

    }