<?php
    //Crie um array com 10 números inteiros. Use um laço de repetição para calcular a soma de todos os elementos do array e exiba o resultado
    $numeros = [5, 8, 12, 3, 7, 15, 20, 6, 9, 11];

    $soma = 0;
    foreach ($numeros as $num) {
        $soma += $num;
    }

    echo "A soma dos elementos do array é: $soma\n";
?>