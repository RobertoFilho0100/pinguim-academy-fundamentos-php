<?php

declare(strict_types=1);

$title = 'My Webstore';
$heading = 'Home';

$pdo = (new \Core\Database\Connector())->connect();

$statement = $pdo->prepare('SELECT * FROM products;');
$statement->execute();

$products = $statement->fetchAll(\PDO::FETCH_ASSOC);

require resource_path('views/index.php');