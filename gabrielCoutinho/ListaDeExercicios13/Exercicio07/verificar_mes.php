<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Verificação de Mês</title>
</head>
<body>
    <h1>Resultado da Verificação de Mês</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        // Array com os nomes dos meses
        $meses = array(
            1 => "Janeiro",
            2 => "Fevereiro",
            3 => "Março",
            4 => "Abril",
            5 => "Maio",
            6 => "Junho",
            7 => "Julho",
            8 => "Agosto",
            9 => "Setembro",
            10 => "Outubro",
            11 => "Novembro",
            12 => "Dezembro"
        );

        // Verifica se o número está dentro do intervalo
        if ($numero >= 1 && $numero <= 12) {
            echo "<p>O mês correspondente ao número {$numero} é {$meses[$numero]}</p>";
        } else {
            echo "<p>Não existe mês com o número {$numero}.</p>";
        }
    }
    ?>

    <a href="index.html">Voltar</a>
</body>
</html>
