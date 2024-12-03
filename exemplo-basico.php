<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Funcao Basica</title>
    </head>
    <body>
        <h1>Exemplo Basico</h1>

        <?php
            function soma($a, $b) {
                return $a + $b;
            }

            echo soma(2, 3);
        ?>
    </body>
</html>