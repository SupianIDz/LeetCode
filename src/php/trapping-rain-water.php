<?php

/**
 * @link       https://leetcode.com/problems/trapping-rain-water/
 * @difficulty HARD
 */
class Solution
{
    /**
     * @param  int[] $height
     * @return int
     */
    public function trap(array $height) : int
    {
        $n = count($height);
        if ($n <= 2) {
            return 0;
        }

        $left = 0;
        $right = $n - 1;
        $leftMax = $height[$left];
        $rightMax = $height[$right];
        $water = 0;

        while ($left < $right) {
            if ($height[$left] < $height[$right]) {
                $leftMax = max($leftMax, $height[$left]);
                $water += $leftMax - $height[$left];
                $left++;
            } else {
                $rightMax = max($rightMax, $height[$right]);
                $water += $rightMax - $height[$right];
                $right--;
            }
        }

        return $water;
    }
}
