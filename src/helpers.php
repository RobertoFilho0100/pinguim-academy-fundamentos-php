<?php

declare(strict_types=1);

if (!function_exists('base_path')) {
    function base_path(string $path = ''): string {
        return dirname(__DIR__) . DIRECTORY_SEPARATOR . $path;
    }
}

if (!function_exists('mix')) {
    function mix(string $path): string {

        if(!file_exists(base_path('public/mix-manifest.json'))) {
            throw new RuntimeException("The mix manifest does not exist");
        }

        $content = file_get_contents(base_path('public/mix-manifest.json'));
        $content = json_decode($content, true);

        return $content[$path] ?? '';
    }
}

if (!function_exists('resource_path')) {
    function resource_path(string $path): string {
        return base_path('resources'. DIRECTORY_SEPARATOR . $path);
    }
}

if(!function_exists('dd')) {
    function dd(...$args): void {
        echo '<pre>';
        foreach ($args as $arg) {
            print_r($arg);
        }
        die();
    }
}

if(!function_exists('abort')) {
    function abort(int $code = 404) {
        http_response_code($code);
        require resource_path('views/'. $code . '.php');
        die();
    }
}

if(!function_exists('route_is')) {
    function route_is(string $route): bool {
        $uri = $_SERVER['REQUEST_URI'];
        $uri = parse_url($uri, PHP_URL_PATH);

        return $uri === $route;
    }
}

if(!function_exists('format_money')) {
    function format_money(int $value): string {
        return 'R$' . number_format($value / 100, 2, ',', '.');
    }
}