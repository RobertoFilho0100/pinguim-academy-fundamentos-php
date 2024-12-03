<?php

declare(strict_types = 1);

$titulo = require 'config/titulo.php';

function ola(string $nome): string {
    global $titulo;

    return "Ola $titulo $nome";
}

echo ola('Roberto');
