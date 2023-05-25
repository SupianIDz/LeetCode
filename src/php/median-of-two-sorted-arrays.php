<?php

/**
 * @link       https://leetcode.com/problems/median-of-two-sorted-arrays/
 * @difficulty HARD
 */
class Solution
{
    /**
     * @param  int[] $nums1
     * @param  int[] $nums2
     * @return float
     */
    public function findMedianSortedArrays(array $nums1, array $nums2) : float
    {
        $merged = array_merge($nums1, $nums2);
        sort($merged);

        $length = count($merged);
        $index = (int) floor($length / 2);

        if ($length % 2 === 0) {
            return ($merged[$index - 1] + $merged[$index]) / 2;
        }

        return $merged[$index];
    }
}
