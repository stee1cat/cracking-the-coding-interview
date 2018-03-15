<?php
/**
 * Copyright (c) 2018 Gennadiy Khatuntsev <e.steelcat@gmail.com>
 */

/**
 * @param array $input
 *
 * @return array
 */
function ex7(array $input) {
    $size = count($input);

    if ($size > 0) {
        for ($i = 0; $i < $size / 2; $i++) {
            $first = $i;
            $last = $size - $i - 1;
            for ($j = $first; $j < $last; $j++) {
                $offset = $j - $first;

                $top = $input[$first][$j];
                $input[$first][$j] = $input[$last - $offset][$first];
                $input[$last - $offset][$first] = $input[$last][$last - $offset];
                $input[$last][$last - $offset] = $input[$j][$last];
                $input[$j][$last] = $top;
            }
        }
    }
    else {
        return [];
    }

    return $input;
}