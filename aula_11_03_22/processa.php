<?php
        $num1 = $_REQUEST['num1'];
        $num2 = $_REQUEST['num2'];

        $soma = $num1 + $num2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma</title>
</head>
<body>
    <p>
        A soma é:
        <?php
            echo $soma;
        ?>
    </p>
</body>
</html>