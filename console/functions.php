<?php
// console/functions.php

/**
 * Generate a PHP file from a template
 *
 * @param string $templatePath Path to template file
 * @param string $targetDir Destination directory
 * @param string $filename File name to create
 * @param array $placeholders Associative array of placeholders to replace
 */
function generateFileFromTemplate($templatePath, $targetDir, $filename, $placeholders = [])
{
    if (!file_exists($templatePath)) {
        echo "Template file not found: $templatePath\n";
        exit;
    }

    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $filepath = $targetDir . "/" . $filename;

    if (file_exists($filepath)) {
        echo "File already exists: $filepath\n";
        exit;
    }

    $content = file_get_contents($templatePath);

    if (!empty($placeholders)) {
        $content = str_replace(array_keys($placeholders), array_values($placeholders), $content);
    }

    file_put_contents($filepath, $content);

    echo "Created: $filepath\n";
}

/**
 * var dump the data 
 * @param array $vars
 */
function dump(...$vars)
{
    echo '<pre>';
    $dataType = gettype($vars[0]);
    if ($dataType == 'array') {
        show_array($vars[0]);
    } elseif ($dataType == 'string' || $dataType == 'integer' || $dataType == 'boolean' || $dataType == NULL) {
        show_dump($vars[0]);
    }else{
        echo 'It seems like it is an object type data';
    }
    echo '</pre>';
}

/**
 * var dump and exit the rest of code
 * @param array $vars
 * @return never
 */
function dd(...$vars)
{
    dump(...$vars);
    exit;
}

/**
 * Show data in string, int, null or bool type data
 * @param string|int|null|bool $data
 */
function show_dump(string|int|null|bool $data)
{
    $dataType = gettype($data);
    switch ($dataType) {
        case 'string':
            echo '<span style="background-color:#fff;color:#766400;">';
            break;
        case 'integer':
            echo '<span style="background-color:#fff;color:green;">';
            break;
        case 'boolean':
            echo '<span style="background-color:#fff;color:black;">';
            break;
        default:
            echo '<span style="background-color:#fff;color:#766400;">';
            break;
    }
    var_dump($data);
    echo '</span>';
}

/**
 * Show array in var dump
 * @param array $data
 * @param int|null $parentKey
 */
function show_array(array $data, int|null $parentKey = null)
{
    echo '<span style="background-color:#fff;color:#04a4c9;">';
    echo $parentKey ? "[$parentKey]" : '';
    echo "<details style='color:#04a4c9;margin-left:20px;'>";
    echo "<summary>array</summary>";
    foreach ($data as $key => $value) {
        $dataType = gettype($value);
        if ($dataType != 'array') {
            echo "[$key] => ";
            show_dump($value);
            continue;
        }
        show_array($value, $key);
    }
    echo '</details>';
    echo '</span>';
}