<?php

declare(strict_types=1);

$title = 'My Webstore';
$heading = 'Home';

$pdo = (new \Core\Database\Connector())->connect();

$statement = $pdo->prepare('SELECT * FROM products WHERE id = 1;');
$statement->execute();

$products = $statement->fetchAll(\PDO::FETCH_ASSOC);

require resource_path('views/product.php');