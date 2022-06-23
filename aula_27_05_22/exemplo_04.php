<?php
//Função com retorno e com parametro
function teste4($x,$y,$z){
    $soma = $x + $y / $z;
    return $soma;
}

$num1 = 10;
$num2 = 20;
$num3 = 2;


$res = teste4($num1,$num2,$num3);

echo $res;

echo "<hr>";
?>