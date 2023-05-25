<?php

/**
 * @link       https://leetcode.com/problems/valid-number/
 * @difficulty HARD
 */
class Solution
{
    /**
     * @param  string $s
     * @return bool
     */
    public function isNumber(string $s) : bool
    {
        return is_numeric($s);
    }
}
