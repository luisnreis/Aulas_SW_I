<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
</head>
<body>
    <?php
        $i = $_POST['num'];

        echo "Fique com o cálculo do número inserido em uma tabuada e 1 a 10:<br>";

        for ($cont=0;$cont<=10;$cont++){
            $mult = $cont * $i;
            echo "$cont X $i = $mult <br>";

        }

    ?>
    
</body>
</html>