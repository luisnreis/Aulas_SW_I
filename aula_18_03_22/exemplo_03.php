<?php
    $sigla = "BA";

    switch ($sigla) {
        case "SP":
            echo "São Paulo";
            break;
        case "RJ":
            echo "Rio de Janeiro";
            break;
        case "BA":
            echo "Bahia";
            break;
        
        default:
            echo "Sigla não foi encontrada";
            break;
    }
?>