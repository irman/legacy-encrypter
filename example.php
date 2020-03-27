<?php

require __DIR__.'/vendor/autoload.php';

use Illuminate\Support\Str;
use Irman\LegacyEncrypter\McryptEncrypter;

$encrypter = new McryptEncrypter(Str::random(16));
$encrypted = $encrypter->encrypt('I am working!');

echo $encrypted.PHP_EOL;
echo $encrypter->decrypt($encrypted).PHP_EOL;
