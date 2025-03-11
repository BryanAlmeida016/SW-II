<?php
    //Crie um array com 10 números inteiros. Use um laço de repetição para calcular a soma de todos os elementos do array e exiba o resultado
    $nums = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    $total = array();

    for ($i=0; $i < 10; $i++) { 
        $total += $nums($i);
    }

    print_r($total);
?>