<?php

/**
 * @link       https://leetcode.com/problems/pascals-triangle-ii
 * @difficulty EASY
 */
class Solution
{
    /**
     * @param  int $rowIndex
     * @return int[][]
     */
    public function generate(int $rowIndex) : array
    {
        $triangle = [];

        for ($i = 0; $i < $rowIndex + 1; $i++) {
            $row = [];
            for ($j = 0; $j <= $i; $j++) {
                if ($j === 0 || $j === $i) {
                    $row[] = 1;
                } else {
                    $row[] = $triangle[$i - 1][$j - 1] + $triangle[$i - 1][$j];
                }
            }

            $triangle[] = $row;
        }

        return $triangle[$rowIndex];
    }
}
