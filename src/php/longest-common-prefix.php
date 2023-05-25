<?php

/**
 * @link       https://leetcode.com/problems/longest-common-prefix/
 * @difficulty EASY
 */
class Solution
{
    /**
     * @param  string[] $strs
     * @return string
     */
    public function longestCommonPrefix(array $strs) : string
    {
        $n = count($strs);
        if ($n === 0) {
            return "";
        }

        $prefix = $strs[0];
        for ($i = 1; $i < $n; $i++) {
            while (! str_starts_with($strs[$i], $prefix)) {
                $prefix = substr($prefix, 0, strlen($prefix) - 1);

                if (strlen($prefix) === 0) {
                    return "";
                }
            }
        }

        return $prefix;
    }
}
