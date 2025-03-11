<?php
    // Função que retorna a soma dos elementos de um array
    
    function somaArray($numeros) {
        return array_sum($numeros);
    }
    
    echo "Soma do array: " . somaArray([1, 2, 3, 4, 5]) . "\n";
?>