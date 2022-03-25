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

    $idade = 1;
    $habi = TRUE;
    $test = "";

    if ($habi == TRUE) {
        $test = "SIM";
    }

    else {
        $test = "NÃO";
    }

    echo ("Sua idade é: $idade <br>");
    echo ("Tem habilitação: $test <br>");
    echo ("<br>");

    if ($idade>=18 && $habi === TRUE) {
        //comandos para verdadeiro
        echo ("Você está habilitado para dirigir!");
    } 

    elseif ($idade<=17 && $habi === FALSE) {
        echo ("Triste notícia, você não pode dirigir.");
    }

    if ($idade>=18 && $habi === FALSE) {
        echo ("Você tem idade para dirigir, entretanto não tem habilitação.");
    }

    elseif ($idade<=17 && $habi === TRUE) {
        echo ("Que pena você não pode dirigir porque não tem idade. E POR QUE VOCÊ TEM HABILITAÇÃO SENDO DE MENOR?");
    }
?>