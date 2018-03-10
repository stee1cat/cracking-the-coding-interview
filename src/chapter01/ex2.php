<?php
/**
 * Copyright (c) 2018 Gennadiy Khatuntsev <e.steelcat@gmail.com>
 */

/**
 * @param string $string1
 * @param string $string2
 *
 * @return boolean
 */
function ex2($string1, $string2) {
    $result = true;
    $chars1 = [];

    if (strlen($string1) === strlen($string2)) {
        for ($i = 0; $i < strlen($string1); $i++) {
            $charCode = ord($string1[$i]);

            if (isset($chars1[$charCode])) {
                $chars1[$charCode]++;
            }
            else {
                $chars1[$charCode] = 1;
            }
        }

        for ($i = 0; $i < strlen($string2); $i++) {
            $charCode = ord($string2[$i]);

            if (isset($chars1[$charCode]) && $chars1[$charCode]) {
                $chars1[$charCode]--;
            }
            else {
                $result = false;
                break;
            }
        }
    }
    else {
        $result = false;
    }

    return $result;
}