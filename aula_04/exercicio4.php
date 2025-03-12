<?php
    //Crie um array com 15 números inteiros. Use um laço de repetição para contar quantos números são pares e quantos são ímpares. Exiba os resultados
    $numeros = [10, 23, 45, 66, 78, 90, 33, 21, 14, 56, 71, 82, 99, 100, 37];
    $pares = 0;
    $impares = 0;

    foreach ($numeros as $num) {
        if ($num % 2 === 0) {
            $pares++;
        } else {
            $impares++;
        }
    }

    echo "Quantidade de números pares: $pares\n";
    echo "Quantidade de números ímpares: $impares\n";
?>