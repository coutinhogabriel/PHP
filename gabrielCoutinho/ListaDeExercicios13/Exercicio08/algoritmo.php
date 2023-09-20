<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Verificação números primos</title>
</head>
<body>
    <h1>Resultado da Verificação de Números primos até 1000</h1>

    <?php
function isPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i === 0) {
            return false;
        }
    }
    return true;
}

echo "<h1>Números primos até 1000:</h1><br>";
for ($i = 2; $i <= 1000; $i++) {
    if (isPrimo($i)) {
        echo $i . " ";
    }
}
?>