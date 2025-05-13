<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Consulta de CEP com PHP</title>
  <link rel="stylesheet" href="estilo.css">
</head>
<body>
  <div class="container">
    <h1>Consulta de CEP</h1>

    <form method="POST">
      <label for="cep">Digite o CEP (somente números):</label>
      <input type="text" name="cep" id="cep" maxlength="8" required pattern="\d{8}" title="Digite exatamente 8 dígitos numéricos">
      <button type="submit">Buscar</button>
    </form>

    <?php
    function getEstado($uf) {
      $estados = [
        "SP" => "São Paulo", "RJ" => "Rio de Janeiro", "MG" => "Minas Gerais", "ES" => "Espírito Santo",
        "AC" => "Acre", "AL" => "Alagoas", "AM" => "Amazonas", "AP" => "Amapá", "BA" => "Bahia",
        "CE" => "Ceará", "DF" => "Distrito Federal", "GO" => "Goiás", "MA" => "Maranhão",
        "MT" => "Mato Grosso", "MS" => "Mato Grosso do Sul", "PA" => "Pará", "PB" => "Paraíba",
        "PE" => "Pernambuco", "PI" => "Piauí", "PR" => "Paraná", "RN" => "Rio Grande do Norte",
        "RO" => "Rondônia", "RR" => "Roraima", "RS" => "Rio Grande do Sul", "SC" => "Santa Catarina",
        "SE" => "Sergipe", "TO" => "Tocantins"
      ];
      return $estados[$uf] ?? "Desconhecido";
    }

    function getRegiao($uf) {
      $regioes = [
        "Norte" => ["AC", "AM", "RR", "RO", "PA", "AP", "TO"],
        "Nordeste" => ["BA", "PE", "CE", "RN", "AL", "PB", "SE", "PI", "MA"],
        "Centro-Oeste" => ["MT", "MS", "GO", "DF"],
        "Sudeste" => ["SP", "RJ", "MG", "ES"],
        "Sul" => ["PR", "SC", "RS"]
      ];
      foreach ($regioes as $nome => $ufs) {
        if (in_array($uf, $ufs)) return $nome;
      }
      return "Desconhecida";
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["cep"])) {
      $cep = preg_replace("/\D/", "", $_POST["cep"]);

      if (!preg_match("/^\d{8}$/", $cep)) {
        echo "<p class='erro'>CEP inválido. Digite exatamente 8 números.</p>";
      } else {
        $url = "https://viacep.com.br/ws/$cep/json/";
        $json = @file_get_contents($url);
        if ($json === FALSE) {
          echo "<p class='erro'>Erro ao acessar a API ViaCEP.</p>";
        } else {
          $data = json_decode($json, true);

          if (isset($data["erro"])) {
            echo "<p class='erro'>CEP não encontrado.</p>";
          } else {
            $estado = getEstado($data["uf"]);
            $regiao = getRegiao($data["uf"]);

            echo "<div class='resultado'>";
            echo "<h2>Resultado:</h2>";
            echo "<p><strong>Logradouro:</strong> {$data['logradouro']}</p>";
            echo "<p><strong>Bairro:</strong> {$data['bairro']}</p>";
            echo "<p><strong>Localidade:</strong> {$data['localidade']}</p>";
            echo "<p><strong>UF:</strong> {$data['uf']}</p>";
            echo "<p><strong>Estado:</strong> $estado</p>";
            echo "<p><strong>Região:</strong> $regiao</p>";
            echo "</div>";
          }
        }
      }
    }
    ?>
  </div>
</body>
</html>
