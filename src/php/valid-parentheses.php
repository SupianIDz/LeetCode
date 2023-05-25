<?php

/**
 * @link       https://leetcode.com/problems/valid-parentheses/
 * @difficulty EASY
 */
class Solution
{
    /**
     * @param  string $s
     * @return bool
     */
    public function isValid(string $s) : bool
    {
        while (preg_match('/\(\)|\[]|\{}/', $s)) {
            $s = preg_replace('/\(\)|\[]|\{}/', '', $s);
        }

        return $s === '';
    }
}
