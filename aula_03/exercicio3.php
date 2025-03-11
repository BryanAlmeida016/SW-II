<?php
    // Função que verifica se um número é par ou ímpar
    
    function parOuImpar($numero) {
        return ($numero % 2 === 0) ? "Par" : "Ímpar";
    }
    
    echo "O número 7 é: " . parOuImpar(7) . "\n";
?>