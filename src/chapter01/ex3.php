<?php
/**
 * Copyright (c) 2018 Gennadiy Khatuntsev <e.steelcat@gmail.com>
 */

/**
 * @param string $input
 *
 * @return string
 */
function ex1_3($input) {
    $output = '';
    $search = ' ';
    $replace = '%20';

    for ($i = 0; $i < strlen($input); $i++) {
        if ($input[$i] === $search) {
            $output .= $replace;
        }
        else {
            $output .= $input[$i];
        }
    }

    return $output;
}