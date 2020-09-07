<?php
    namespace Models;

    $crud=new ModelCrud();
   
    $id_idoso=filter_input(INPUT_GET, "id_idoso", FILTER_SANITIZE_SPECIAL_CHARS);
    $id_users=filter_input(INPUT_GET, "id", FILTER_SANITIZE_SPECIAL_CHARS);

    
    //Controller Excluir conta de usuário
    if(isset($id_users))
    {
        $crud->deleteDB("users", "id=?", array($id_users));
        
        echo"<script>
        alert('Conta Deletada!')
        window.location.href='".DIRPAGE."index'
        </script>";
        
    }
    
    //Controller Excluir idoso cadastrado
    if(isset($id_idoso))
    {
        $crud->deleteDB("users_idoso", "id=?", array($id_idoso));
        echo"<script>
        alert('Dados Deletados!')
        window.location.href='".DIRPAGE."minha-conta'
        </script>";
    }


?>