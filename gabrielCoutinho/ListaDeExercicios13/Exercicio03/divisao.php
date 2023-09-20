<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Divisão</title>
</head>
<body>
    <h1>Resultado da Divisão</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];

        // Verifica se os valores inseridos são números válidos
        if (is_numeric($numero1) && is_numeric($numero2)) {
            if ($numero2 == 0) {
                echo "<p>Divisão por zero não é permitida.</p>";
            } else {
                $resultado = $numero1 / $numero2;

                echo "<p>$numero1 / $numero2 = $resultado</p>";
                echo "<p>Divisão por subtrações sucessivas:</p>";

                while ($numero1 >= $resultado) {
                    echo "$numero1 - $numero2 = " . ($numero1 - $numero2) . "<br>";
                    $numero1 -= $numero2;
                }

                echo "<p>Resultado Final:</p>";
                echo "$resultado";
            }
        } else {
            echo "<p>Por favor, insira números válidos.</p>";
        }
    }
    ?>

    <a href="index.html">Voltar</a>
</body>
</html>
