<?php
/**
 * Copyright (c) 2018 Gennadiy Khatuntsev <e.steelcat@gmail.com>
 */

$folders = [
    'chapter01',
    'chapter02',
];
$baseDir = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src';

foreach ($folders as $folder) {
    $pattern = $baseDir . DIRECTORY_SEPARATOR . $folder . DIRECTORY_SEPARATOR . '*.php';
    $files = glob($pattern);

    foreach ($files as $file) {
        require_once $file;
    }
}