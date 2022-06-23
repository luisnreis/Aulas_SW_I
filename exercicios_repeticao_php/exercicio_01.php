<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>
<body>
<?php
    $num = $_POST['num'];
    $res = pow($num,3);

    for($i=$num;$i<=$res;$i++)
    echo "Contagem de números no intervalo do valor digitado até o cubo do mesmo são: $i <br>";
    echo "O número digitado na página anterior foi $num e o seu cubo é $res";

?>
</body>
</html>