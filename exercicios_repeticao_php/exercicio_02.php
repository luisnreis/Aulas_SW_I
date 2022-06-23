<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
</head>
<body>
    <?php
        $num = $_POST['num'];
        $res= pow($num,3);

        for ($i=$num;$i<=$res;$i++){
            if ($i % 2 == 1){
                echo "A contagem de números impares nesse intervalo até o cubo é de: $i <br>";
            }
        }
        echo "O número inserido na página anterior foi $num e seu cubo é $res ";
    ?>
</body>
</html>