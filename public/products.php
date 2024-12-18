<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Models\Product;

$title = 'Products';

$products = Product::all();

$filteredProducts = array_filter($products, static fn(array $product) => $product['is_available']);

require __DIR__ . '/../resources/views/index.phtml';
