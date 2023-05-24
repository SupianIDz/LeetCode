<?php

/**
 * @link       https://leetcode.com/problems/reverse-integer/
 * @difficulty MEDIUM
 */
class Solution
{
    /**
     * @param  int $x
     * @return int
     */
    public function reverse(int $x) : int
    {
        $x = strrev($x);

        if ($x[strlen($x) - 1] === '-') {
            $x = '-' . substr($x, 0, -1);
        }

        $x = $x * 1;

        return (abs($x) & 0x7FFFFFFF) == abs($x) ? $x : 0;
    }
}
