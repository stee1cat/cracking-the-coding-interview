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

/**
 * @param string $input
 *
 * @return string
 */
function ex3($input) {
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

/**
 * @param string $input
 *
 * @return boolean
 */
function ex4($input) {
    $chars = [];
    $charsLength = 0;

    for ($i = 0; $i < strlen($input); $i++) {
        $char = strtolower($input[$i]);

        if ($char !== ' ')  {
            if (isset($chars[$char])) {
                $chars[$char]++;
            }
            else {
                $chars[$char] = 1;
            }

            $charsLength++;
        }
    }

    $oddChar = false;
    $isEvenLength = $charsLength % 2 === 0;
    foreach ($chars as $charCount) {
        if ($charCount % 2 !== 0)  {
            if ($isEvenLength || $oddChar) {
                return false;
            }
            else {
                $oddChar = true;
            }
        }
    }

    return true;
}