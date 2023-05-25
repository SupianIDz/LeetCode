<?php

/**
 * @link       https://leetcode.com/problems/two-sum/
 * @difficulty MEDIUM
 */
class Solution
{
    /**
     * @param  int[] $nums
     * @param  int   $target
     * @return int[]
     */
    public function twoSum(array $nums, int $target) : array
    {
        foreach ($nums as $i => $val) {
            foreach ($nums as $x => $row) {
                if ($x === $i) {
                    continue;
                }

                if (($val + $row) === $target) {
                    return [$i, $x];
                }
            }
        }
    }
}
