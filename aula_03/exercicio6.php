<?php
    // Função que retorna a tabuada de um número
    
    function tabuada($numero) {
        echo "Tabuada do número $numero:\n";
        for ($i = 1; $i <= 10; $i++) {
            echo "$numero x $i = " . ($numero * $i) . "\n";
        }
    }

    tabuada(5);
?>