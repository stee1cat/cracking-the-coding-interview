<?php
/**
 * Copyright (c) 2018 Gennadiy Khatuntsev <e.steelcat@gmail.com>
 */

/**
 * @param string $string
 *
 * @return string
 */
function ex6($string) {
    $result = '';
    $length = strlen($string);

    if ($length <= 1) {
        return $string;
    }

    $lastChar = $string[0];
    $counter = 1;
    for ($i = 1; $i < $length; $i++) {
        $isEnd = $i === $length - 1;

        if ($lastChar !== $string[$i] || $isEnd) {
            if ($isEnd) {
                $counter++;
            }

            $result .= $lastChar . $counter;

            if (strlen($result) >= $length) {
                return $string;
            }

            $counter = 1;
            $lastChar = $string[$i];
        }
        else {
            $counter++;
        }
    }

    return $result;
}