<?php
    $sesssion=new Classes\ClassSessions();
    $sesssion->destructSessions();

    echo"<script>
        alert('Você efetuou o Logout!')
        window.location.href='".DIRPAGE."'
        </script>";