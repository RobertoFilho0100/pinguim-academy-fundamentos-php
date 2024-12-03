<?php

declare(strict_types = 1);

function soma(int $a, int $b): int {
    return $a + $b;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Funcao Tipada</title>
    </head>
    <body>
        <h1>Funcoes Tipadas</h1>

        <?php
            echo soma(rand(10, 50), rand(10, 50));
        ?>
    </body>
</html>