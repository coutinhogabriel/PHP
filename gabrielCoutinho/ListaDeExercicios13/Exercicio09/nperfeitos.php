<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Perfeitos</title>
</head>
<body>
    <h1>Números Perfeitos até 1000</h1>

    <?php
    function isPerfectNumber($number) {
        $sum = 0;

        for ($i = 1; $i <= $number / 2; $i++) {
            if ($number % $i == 0) {
                $sum += $i;
            }
        }

        return $sum == $number;
    }

    echo "<p>Números perfeitos até 1000:</p>";
    echo "<ul>";

    for ($i = 2; $i <= 1000; $i++) {
        if (isPerfectNumber($i)) {
            echo "<li>{$i}</li>";
        }
    }

    echo "</ul>";
    ?>

</body>
</html>
