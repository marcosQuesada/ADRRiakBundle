<?php

    $file = __DIR__.'/../../../../../../vendor/autoload.php';
    if (!file_exists($file)) {
        throw new RuntimeException('Install dependencies to run test suite (composer install --dev).');
    }

    $autoload = require_once $file;

    