<?php
    //Crie um array associativo onde cada chave é o nome de um aluno e o valor é a sua nota. Use um laço de repetição para calcular a média das notas e exiba o resultado.
    $notas = [
        "Bryan" => 8.5,
        "Danielison" => 7.2,
        "Lusga" => 9.0,
        "Vidro" => 6.8,
        "Cordialidades" => 7.5
    ];

    $soma = 0;
    $totalAlunos = count($notas);

    foreach ($notas as $nota) {
        $soma += $nota;
    }

    totalAlunos > 0 ? $media = $soma / $totalAlunos : $media = 0;

    echo "A média das notas dos alunos é: " . number_format($media, 2) . "\n";


    //Desafio Extra Modifique o Exercício 5 para exibir o nome do aluno com a maior nota. Use um laço de repetição para encontrar essa informação
    $notas = [
        "Bryan" => 8.5,
        "Danielison" => 7.2,
        "Lusga" => 9.0,
        "Vidro" => 6.8,
        "Cordialidades" => 7.5
    ];
    
    $soma = 0;
    $totalAlunos = count($notas);
    $maiorNota = -1;
    $melhorAluno = "";
    
    foreach ($notas as $aluno => $nota) {
        $soma += $nota;
        if ($nota > $maiorNota) {
            $maiorNota = $nota;
            $melhorAluno = $aluno;
        }
    }
    
    totalAlunos > 0 ? $media = $soma / $totalAlunos : $media = 0;
    
    echo "A média das notas dos alunos é: " . number_format($media, 2) . "\n";
    echo "O aluno com a maior nota é: $melhorAluno com nota $maiorNota\n";
?>