<?php

/**
 * @link       https://leetcode.com/problems/wildcard-matching
 * @difficulty HARD
 */
class Solution
{
    /**
     * @param  string $s
     * @param  string $p
     * @return bool
     */
    public function isMatch(string $s, string $p) : bool
    {
        $pattern = preg_quote($p, '/');

        $pattern = str_replace('\?', '.', $pattern);
        $pattern = str_replace('\*', '.*', $pattern);
        $pattern = '/^' . $pattern . '$/u';

        return preg_match($pattern, $s) === 1;
    }
}
