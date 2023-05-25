<?php

/**
 * @link       https://leetcode.com/problems/string-to-integer-atoi/
 * @difficulty MEDIUM
 */
class Solution
{
    /**
     * @param  string $s
     * @return int
     */
    public function myAtoi(string $s) : int
    {
        $s = trim($s);
        $n = strlen($s);

        if ($n === 0) {
            return 0;
        }

        $sign = 1;
        $i = 0;

        if ($s[0] === '-' || $s[0] === '+') {
            $sign = ($s[0] === '-') ? -1 : 1;
            $i++;
        }

        $result = 0;
        $maxInt = pow(2, 31) - 1;
        $minInt = -pow(2, 31);

        while ($i < $n && ctype_digit($s[$i])) {
            $result = $result * 10 + intval($s[$i]);

            if ($sign === 1 && $result > $maxInt) {
                return $maxInt;
            } elseif ($sign === -1 && $result > -$minInt) {
                return $minInt;
            }

            $i++;
        }

        return $result * $sign;
    }
}
