<?php

/**
 * @link       https://leetcode.com/problems/pascals-triangle
 * @difficulty EASY
 */
class Solution
{
    /**
     * @param  int $numRows
     * @return int[][]
     */
    public function generate(int $numRows) : array
    {
        $triangle = [];

        for ($i = 0; $i < $numRows; $i++) {
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

        return $triangle;
    }
}

$solution = new Solution();

print_r($solution->generate(5));
