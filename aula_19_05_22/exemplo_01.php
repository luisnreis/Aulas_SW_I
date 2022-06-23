<?php
    $numeros= [1,23,85.7,1.2];
    
    $qtde= count($numeros);
    echo "Meu vetor tem: $qtde de posições <hr>";

    $total= 0;


    for ($i=0; $i<4;$i++){
        echo "Indice = $i ==> $numeros[$i] <br>";
        $total= $total + $numeros[$i];
        echo "Soma parcial é de $total<br>";
    }

    echo " <br> Soma total dos valores de vetores é de: $total";

    $media = $total/$qtde;
    echo "<br> A média total dos vetores é de $media";

?>