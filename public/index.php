<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Models\Product;

$title = 'My WebStore';
$heading = 'Home';

$products = Product::all();


require __DIR__ . '/../resources/views/index.php';
