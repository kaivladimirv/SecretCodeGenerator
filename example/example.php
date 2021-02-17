<?php

require __DIR__ . '/../vendor/autoload.php';

use OtusPackages\SecretCodeGenerator;

$secretCode = (new SecretCodeGenerator())->generate();

echo  "Ваш секретный код: {$secretCode}". PHP_EOL;