<?php
    // Função que gera um array com 10 números aleatórios
    
    function gerarNumerosAleatorios() {
        $array = [];
        for ($i = 0; $i < 10; $i++) {
            $array[] = rand(1, 100);
        }
        return $array;
    }

    print_r(gerarNumerosAleatorios());
?>