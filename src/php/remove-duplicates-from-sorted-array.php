<?php

/**
 * @link       https://leetcode.com/problems/remove-duplicates-from-sorted-array/
 * @difficulty EASY
 */
class Solution
{
    /**
     * @param  int[] $nums
     * @return int
     */
    public function removeDuplicates(array &$nums) : int
    {
        $temps = [];

        foreach ($nums as $i => $val) {
            if (in_array($val, $temps)) {
                unset($nums[$i]);
            } else {
                $temps[] = $val;
            }
        }

        return count($temps);
    }
}
