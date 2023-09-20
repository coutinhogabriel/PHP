<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Custo de Viagem</title>
</head>
<body>
    <h1>Resultado do Custo de Viagem</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $quilometragem = $_POST["quilometragem"];
        $consumo = $_POST["consumo"];
        $preco_combustivel = $_POST["preco_combustivel"];

        // Calcula o consumo médio em km/l
        $consumo_medio = $quilometragem / $consumo;

        // Calcula o custo por quilômetro
        $custo_por_quilometro = $preco_combustivel / $consumo_medio;

        echo "<p>Consumo médio: " . number_format($consumo_medio, 2, ".", ".") . " km/l</p>";
        echo "<p>Custo por quilômetro: R$ " . number_format($custo_por_quilometro, 2, ",", ".") . "</p>";
    }
    ?>

    <a href="index.html">Voltar</a>
</body>
</html>
