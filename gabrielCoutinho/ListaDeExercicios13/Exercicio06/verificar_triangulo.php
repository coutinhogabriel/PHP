<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Verificação de Triângulo</title>
</head>
<body>
    <h1>Resultado da Verificação de Triângulo</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lado1 = $_POST["lado1"];
        $lado2 = $_POST["lado2"];
        $lado3 = $_POST["lado3"];

        // Verifica se os lados formam um triângulo
        if ($lado1 < ($lado2 + $lado3) && $lado2 < ($lado1 + $lado3) && $lado3 < ($lado1 + $lado2)) {
            // Verifica o tipo de triângulo
            if ($lado1 == $lado2 && $lado2 == $lado3) {
                echo "<p>Triângulo Equilátero - 3 lados iguais</p>";
            } elseif ($lado1 == $lado2 || $lado2 == $lado3 || $lado1 == $lado3) {
                echo "<p>Triângulo Isósceles - 2 lados iguais</p>";
            } else {
                echo "<p>Triângulo Escaleno - 3 lados diferentes</p>";
            }
        } else {
            echo "<p>Os lados não formam um triângulo.</p>";
        }
    }
    ?>

    <a href="index.html">Voltar</a>
</body>
</html>
