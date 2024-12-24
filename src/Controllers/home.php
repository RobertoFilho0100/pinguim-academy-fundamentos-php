<?php

declare(strict_types=1);

use Core\Database\Connector;

$title = 'My Webstore';
$heading = 'Home';

$db = new Connector();

$products = (new Connector())
    ->query("SELECT * FROM products")
    ->get();

require resource_path('views/index.php');