<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>
    <h1></h1>
</body>
</html>
<?php
    $nota = 7;

    if ($nota>6) {
        //comandos para verdadeiro
        echo ("Tenho boas novas, você está aprovado, parabéns!");
    } 

    else {
        //comandos para falso
        if ($nota<5) {
            echo ("Triste notícia, você está reprovado.");
        }
        //comando para falso após ser falso
        else {
            echo ("Puts, você está de recuperação.");
        }
    }
?>