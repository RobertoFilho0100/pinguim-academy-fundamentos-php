<?php

declare(strict_types = 1);

$titulo = 'parametros por referencia';
$subtitulo = 'teste com valores e referencias';

function converteTitulo(string &$titulo): void {
    $titulo = mb_convert_case($titulo, MB_CASE_TITLE);
}

function converteSubtitulo(string $subtitulo): string {
    return mb_convert_case($titulo, MB_CASE_TITLE);
}

converteTitulo($titulo);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $titulo ?></title>
    </head>
    <body>
        <h1><?= $titulo ?></h1>
        <h2><?= converteSubtitulo($subtitulo) ?></h2>

        <div>
            <?= $subtitulo ?>
        </div>
    </body>
</html>