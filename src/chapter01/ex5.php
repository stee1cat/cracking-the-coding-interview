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
function ex5($string1, $string2) {
    if (abs(strlen($string1) - strlen($string2)) <= 1) {
        $length1 = strlen($string1);
        $length2 = strlen($string2);
        $modifications = 0;

        while ($length1 && $length2) {
            if ($string1[$length1 - 1] !== $string2[$length2 - 1]) {
                if ($length1 < $length2) {
                    $length2--;
                }
                else {
                    $length1--;
                }

                $modifications++;
            }

            if ($modifications > 1) {
                return false;
            }

            $length1--;
            $length2--;
        }

        return true;
    }
    else {
        return false;
    }
}