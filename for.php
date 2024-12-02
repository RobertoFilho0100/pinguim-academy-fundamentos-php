<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de Repetição</title>
</head>
<body>
    <div>
        <h3>For Positivo</h3>
        <?php
            for ($i = 0; $i < 10; $i++) {
                echo "$i <br>";
            }
        ?>
    </div>

    <div style="margin-top: 50px">
        <h3>For Negativo</h3>
        <?php
            for ($i = 1000; $i > 990; $i--) {
                echo "$i <br>";
            }
        ?>
    </div>

    <div style="margin-top: 50px">
        <h3>For: Arrays e Indices</h3>
        <?php
            $frutas = ['maçã', 'banana', 'melancia'];

            for ($i = 0; $i < count($frutas); $i++) {
                echo $frutas[$i] . "<br>";
            }
        ?>
    </div>
    
</body>
</html>