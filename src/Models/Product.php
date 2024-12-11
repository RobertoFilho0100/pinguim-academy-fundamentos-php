<?php

declare(strict_types = 1);

namespace App\Models;

class Product
{
    public static function all(): array {
        return [
            [
                'name' => 'Xbox',
                'price' => 500,
                'is_available' => true,
            ],
            [
                'name' => 'Playstation',
                'price' => 600,
                'is_available' => true,
            ],
            [
                'name' => 'Nintendo Switch',
                'price' => 300,
                'is_available' => false,
            ]
        ];
    }
}