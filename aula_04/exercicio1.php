<?php
    //Crie um array associativo chamado $pessoa com as seguintes chaves: nome, idade, cidade
    $pessoa = array("nome" => "Bryan", "idade" => 16, "cidade" => "Ribascity");

    //Adicione uma nova chave chamada profissao ao array
    $pessoa[] = "profissao";

    echo $pessoa["nome"];

    //Crie um array indexado chamado $amigos com os nomes de três amigos
    $amigos = array("Daniel", "Lusga", "Vidro");

    //Combine os arrays $pessoa e $amigos em um novo array chamado $dados
    $dados = array_merge($pessoa, $amigos);

    //Exiba o conteúdo do array $dados usando print_r
    print_r($dados);
?>