<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Calculadora</title>
</head>
<body>
    <h1>Resultado da Calculadora</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor = $_POST["valor"];
        $cincoPorcento = $valor * 0.05;
        $cinquentaPorcento = $valor * 0.5;
    }
    ?>

    <p>5% de <?= $valor ?> é: <?= $cincoPorcento ?></p>
    <p>50% de <?= $valor ?> é: <?= $cinquentaPorcento ?></p>
    <a href="index.html">Voltar</a>
</body>
</html>
