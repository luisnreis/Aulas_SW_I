<?php
    $usuario = $_POST['user'];
    $senha = $_POST['pass'];

    $user = 'luis';
    $pass = '777';

    if(($usuario == $user) && ($senha == $pass)){
        //echo "OK validado";
        session_start();
        $_SESSION['user'] = $usuario;
        $_SESSION['logado'] = 1;
        header("Location: restrita.php");
    }
    else{
        echo "Nananinanão!!!!";
    }



?>