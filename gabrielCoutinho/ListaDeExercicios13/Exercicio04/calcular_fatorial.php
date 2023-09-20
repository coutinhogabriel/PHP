<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Fatorial</title>
</head>
<body>
    <h1>Resultado do Fatorial</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        // Função para calcular o fatorial
        function calcularFatorial($n) {
            if ($n < 0) {
                return "Número negativo. O fatorial não está definido.";
            } elseif ($n == 0 || $n == 1) {
                return 1;
            } else {
                $fatorial = 1;
                for ($i = $n; $i >= 2; $i--) {
                    $fatorial *= $i;
                }
                return $fatorial;
            }
        }

        // Verifica se o número inserido é válido
        if (is_numeric($numero)) {
            // Chama a função para calcular o fatorial
            $resultado = calcularFatorial($numero);

            echo "<p>$numero! = $resultado</p>";
        } else {
            echo "<p>Por favor, insira um número válido.</p>";
        }
    }
    ?>

    <a href="index.html">Voltar</a>
</body>
</html>
