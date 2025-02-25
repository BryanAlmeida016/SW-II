<?php
    # For
    for ($i=1; $i <=10 ; $i++) { 
        echo $i."<br>"; //--> Pula linha
    }

    # While
    echo "<br>";
    $x = 1;
    while ($x <= 10) {
        echo $x . "<br>";
        $x++;
    }

    # Vetor / Método Hard
    echo "<br>";
    $vetor = ['CalabresoGames','Guloso','Mr.Delicio','Mr.Cordialidade'];
    $qtde = count($vetor); //--> Contador
    //echo $qtde;

    //echo $vetor; --> Buga tudo
    //var_dump($vetor); --> Lê toda a linha de código

    for ($i=0; $i < $qtde; $i++) { 
        echo $vetor[$i];
        echo "<br>";
    }

    echo "<br>";
    echo $vetor[1]; //--> Exibe um de cada vez

    # Para rodar: localhost/aula_02/exemplos.php
?>