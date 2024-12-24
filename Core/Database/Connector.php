<?php

declare(strict_types=1);

namespace Core\Database;

class Connector
{
    public function connect(): \PDO {
        $dsn = 'mysql:host=127.0.0.1;port=3307;dbname=web_store;charset=utf8mb4';
        return new \PDO($dsn, 'root', 'qaz@123');
    }
}