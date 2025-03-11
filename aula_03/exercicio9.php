<?php
    // Função que retorna o fatorial de um número

    function fatorial($numero) {
    $resultado = 1;
    for ($i = $numero; $i > 1; $i--) {
        $resultado *= $i;
    }
    return $resultado;
    }

    echo "Fatorial de 5: " . fatorial(5) . "\n";
?>