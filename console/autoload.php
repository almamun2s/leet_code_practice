<?php
// console/autoload.php

spl_autoload_register(function ($className) {
    $baseDir = __DIR__ . '/../class/';
    $file = $baseDir . $className . '.php';

    if (file_exists($file)) {
        require_once $file;
    } else {
        echo "Class file not found: $file\n";
    }
});
