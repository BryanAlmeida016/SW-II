<?php
    //Cabeçalho
    header("Content-Type: application/json");  //Define o tipo de resposta.

    $metodo = $_SERVER['REQUEST_METHOD'];

    //Conteúdo
    $usuarios = [
        ["id" => 1, "nome" => "Bryan Alameda", "email" => "bryan@email.com"],
        ["id" => 2, "nome" => "Paulo Escuto", "email" => "paulo@email.com"]
    ];

    switch ($metodo) {
        case 'GET':
            //echo "Aqui ações do método GET";
            //Converte para json e retorna
            echo json_encode($usuarios);
            break;
        case 'POST':
            //echo "Aqui ações do método POST";
            $dados = json_decode(file_get_contents('php://input'), true);
            //print_r($dados);
            $novoUsuario = [
                "id" => $dados["id"],
                "nome" => $dados["nome"],
                "email" => $dados["email"]
            ];

            //Adiciona o novo usuario ao array existente
            array_push($usuarios, $novoUsuario);
            echo json_encode('Usuário inserido com sucesso!');
            print_r($usuarios);

            break;
        default:
            echo "Método não encontrado!";
            break;
    }

    //Converte para json e retorna
    //echo json_encode($usuarios);

?>