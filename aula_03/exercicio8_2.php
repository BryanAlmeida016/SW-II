<?php
    // Função que gera um array com 10 números aleatórios

    function gerar_random(){
        //criar um vetor vazio e adicionar 10 num. aleatórios => Laço for de 10x => retornar com o vetor preenchido
        $vetor = array();

        for ($i=0; $i < 10 ; $i++) {
            $vetor[$i] = rand(0,100);
        }

        return $vetor;
    }

    $receba_vetor = gerar_random();

    print_r($receba_vetor);
?>