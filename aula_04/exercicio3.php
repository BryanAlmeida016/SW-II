<?php
    //Crie um array com 8 números inteiros. Use um laço de repetição para encontrar o maior e o menor valor no array e exiba ambos
    $numeros = [25, 18, 30, 12, 7, 42, 55, 10];
    $maior = $numeros[0];
    $menor = $numeros[0];

    foreach ($numeros as $num) {
        if ($num > $maior) {
            $maior = $num;
        }
        if ($num < $menor) {
            $menor = $num;
        }
    }

    echo "Maior valor: $maior\n";
    echo "Menor valor: $menor\n";
?>