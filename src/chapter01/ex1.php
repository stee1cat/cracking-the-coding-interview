<?php
/**
 * Copyright (c) 2018 Gennadiy Khatuntsev <e.steelcat@gmail.com>
 */

/**
 * @param string $string
 *
 * @return boolean
 */
function ex1($string) {
    $result = true;
    $chars = [];

    for ($i = 0; $i < strlen($string); $i++) {
        $charCode = ord($string[$i]);

        if (isset($chars[$charCode]) && $chars[$charCode]) {
            $result = false;
            break;
        }
        else {
            $chars[$charCode] = true;
        }
    }

    return $result;
}
