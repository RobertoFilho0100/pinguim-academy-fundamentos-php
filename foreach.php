<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de Repetição</title>
</head>
<body>
    <div>
        <h3>Foreach Simples</h3>

        <?php
            $usuarios = [
                ['nome' => 'John Doe', 'email' => 'john.doe@email.com'],
                ['nome' => 'Maria Doe', 'email' => 'maria.doe@email.com']
            ];

            foreach ($usuarios as $usuario) {
                echo $usuario['nome'] . ' - ' . $usuario['email'] . '<br>';
            }
        ?>
    </div>

    <div style="margin-top: 50px">
        <h3>Foreach com Esteroides</h3>

        <?php
            $usuarios = [
                ['nome' => 'John Doe', 'email' => 'john.doe@email.com'],
                'Usuario B' => ['nome' => 'Maria Doe', 'email' => 'maria.doe@email.com'],
            ];

            foreach($usuarios as $index => $usuario) {
                echo $index . ': ' . $usuario['nome'] . ' - ' . $usuario['email'] . '<br>';
            }
        ?>
    </div>
</body>
</html>