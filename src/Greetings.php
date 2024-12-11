<?php

declare(strict_types=1);

namespace App;

class Greetings {
    public function greeting(string $name): string {
        return "Hello, $name! How are you doing today?";
    }
}