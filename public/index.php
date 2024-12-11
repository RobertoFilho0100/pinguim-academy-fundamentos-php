<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Greetings;
use App\Logger;

$message = new Greetings();
echo $message->greeting("Roberto");

echo '<br>';
echo '<br>';

(new Logger())->write("John Doe accessed the application");
