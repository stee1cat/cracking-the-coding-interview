<?php
/**
 * Copyright (c) 2018 Gennadiy Khatuntsev <e.steelcat@gmail.com>
 */

/**
 * @param string $input
 *
 * @return boolean
 */
function ex1_4($input) {
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