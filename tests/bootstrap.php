<?php
/**
 * Copyright (c) 2018 Gennadiy Khatuntsev <e.steelcat@gmail.com>
 */

$files = [
    'chapter01.php',
];
$baseDir = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src';

foreach ($files as $file) {
    require_once $baseDir . DIRECTORY_SEPARATOR . $file;
}