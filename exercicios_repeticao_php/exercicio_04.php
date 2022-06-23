<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicío 04</title>
</head>
<body>
    <?php
        $num= $_POST['num'];
        $res=1;
        for($i=$num;$i>=1;$i--){
            $res *= $i;
            echo "$i <br>";
            echo "$res <br>";
        }

        echo "O resultado final é de: $res";
    
    ?>
</body>
</html>