<?php 
    if(empty($_POST['name']) && empty($_POST['email'])){
        echo "</br> Carregando...";

    }else{
        $name = $_POST['name'];
        $email = $_POST['email'];
        echo ('Seu nome é:' . $name. '</br>');
        echo ('Seu email é:' . $email. '</br>');
    }
?>