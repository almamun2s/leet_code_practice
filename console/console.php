<?php
// console/console.php

$argv = $_SERVER['argv'];
$command = $argv[1] ?? null;
$argument = $argv[2] ?? null;

include_once 'functions.php';

// Common placeholders
$commonPlaceholders = [
    '{{name}}' => $argument,
    '{{date}}' => date('Y-m-d'),
    '{{author}}' => get_current_user(),
    '{{author_url}}' => 'https://github.com/almamun2s',
];

switch ($command) {
    case "make:class":
        generateFileFromTemplate(
            __DIR__ . "/files/class.php",
            dirname(__DIR__) . "/class",
            "{$argument}.php",
            $commonPlaceholders
        );
        break;

    default:
        echo "Unknown command: {$command}\n";
        echo "Available commands:\n";
        echo "  make:class <name>   Create a class file from template\n";
        break;
}
