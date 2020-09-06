<?php
    namespace Models;

    $crud=new ModelCrud();
   
    $id_idoso=filter_input(INPUT_GET, "id_idoso", FILTER_SANITIZE_SPECIAL_CHARS);

    
    //Controller Excluir conta de usuário
    if(isset($_GET['id_users']))
    {
        $id_users=$_GET['id_users'];

        $crud->deleteDB("users", "id=?", array($id_users));
        
        echo"<script>
        alert('Conta Deletada!')
        window.location.href='".DIRPAGE."index'
        </script>";
        
    }
    
    //Controller Excluir idoso cadastrado
    if(isset($id_idoso))
    {
        $crud->deleteDB("users_idoso", "idIdoso=?", array($id_idoso));
        header("Location:".DIRPAGE."minha-conta");
    }

    
    
    
    
    

?>