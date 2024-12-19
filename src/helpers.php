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
        return base_path('resource'. DIRECTORY_SEPARATOR . $path);
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