<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Multiplicação</title>
</head>
<body>
    <h1>Resultado da Multiplicação</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];

        // Verifica se os valores inseridos são números válidos
        if (is_numeric($numero1) && is_numeric($numero2)) {
            $resultado = 0;
            $operacao = '';

            // Multiplicação por somas sucessivas
            for ($i = 1; $i <= $numero2; $i++) {
                $resultado += $numero1;
                $operacao .= $numero1;
                if ($i < $numero2) {
                    $operacao .= '+';
                }
            }

            echo "<p>Multiplicação simples $numero1 x $numero2 = $resultado</p>";
            echo "<p>Multiplicação por soma sucessiva $operacao = $resultado</p>";
        } else {
            echo "<p>Por favor, insira números válidos.</p>";
        }
    }
    ?>

    <a href="index.html">Voltar</a>
</body>
</html>
