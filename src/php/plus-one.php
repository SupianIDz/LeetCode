<?php

/**
 * @link       https://leetcode.com/problems/plus-one/
 * @difficulty EASY
 */
class Solution
{
    /**
     * @param  int[] $digits
     * @return int[]
     */
    public function plusOne(array $digits) : array
    {
        $n = count($digits);

        for ($i = $n - 1; $i >= 0; $i--) {
            if ($digits[$i] < 9) {
                $digits[$i]++;

                return $digits;
            }

            $digits[$i] = 0;
        }

        array_unshift($digits, 1);

        return $digits;
    }
}
