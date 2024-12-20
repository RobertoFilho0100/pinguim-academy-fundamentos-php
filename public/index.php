<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

$uri = $_SERVER['REQUEST_URI'];

$routes = [
    '/' => 'home',
    '/contact' => 'contact',
];

if (array_key_exists($uri, $routes)) {
    require base_path('src/Controllers/' . $routes[$uri] . '.php');
} else {
    http_response_code(404);
    require resource_path('views/404.php');
    die();
}