<?php
    namespace Models;

    $crud=new ModelCrud();
   
    $id_idoso=filter_input(INPUT_GET, "id_idoso", FILTER_SANITIZE_SPECIAL_CHARS);
    $id_users=filter_input(INPUT_GET, "id", FILTER_SANITIZE_SPECIAL_CHARS);

    
    //Controller Excluir conta de usuário
    if(isset($id_users) && $id_users != " "){

        $crud->deleteDB("users", "id=?", array($id_users));
        
        echo"<script>
            alert('Conta Deletada!')
            window.location.href='".DIRPAGE."';
            </script>
        ";
        
    }
    
    //Controller Excluir idoso cadastrado
    if(isset($id_idoso) && $id_idoso != "" && $id_idoso != "0"){

        $crud->deleteDB("users_idoso", "id=?", array($id_idoso));
    
        echo"<script>
                alert('Sucesso!')
                window.location.href='".DIRPAGE."myaccount';
            </script>
         ";
    }


?>