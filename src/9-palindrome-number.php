<?php

/**
 * @link       https://leetcode.com/problems/palindrome-number/
 * @difficulty EASY
 */
class Solution
{
    /**
     * @param  int $x
     * @return bool
     */
    public function isPalindrome($x) : bool
    {
        return $x == strrev($x);
    }
}
