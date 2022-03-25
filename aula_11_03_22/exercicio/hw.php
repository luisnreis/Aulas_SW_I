<?php
        $num1 = $_REQUEST['num1'];
        $num2 = $_REQUEST['num2'];
        $num3 = $_REQUEST['num3'];

        $soma = $num1 + $num2 + $num3;
        $media = $soma/3
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <p>
        A média é:
        <?php
            echo $media;
        ?>
    </p>
</body>
</html>