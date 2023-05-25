<?php

/**
 * @link       https://leetcode.com/problems/multiply-strings/
 * @difficulty MEDIUM
 */
class Solution
{
    /**
     * @param  string $num1
     * @param  string $num2
     * @return string
     */
    public function multiply(string $num1, string $num2) : string
    {
        return bcmul($num1, $num2);
    }
}
