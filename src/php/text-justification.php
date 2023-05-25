<?php

/**
 * @link       https://leetcode.com/problems/text-justification/
 * @difficulty HARD
 */
class Solution
{
    /**
     * @param  string[] $words
     * @param  int      $maxWidth
     * @return string[]
     */
    public function fullJustify(array $words, int $maxWidth) : array
    {
        $result = [];
        $i = 0;

        while ($i < count($words)) {
            $lineWords = [];
            $lineWidth = 0;

            while ($i < count($words) && $lineWidth + count($lineWords) + strlen($words[$i]) <= $maxWidth) {
                $lineWords[] = $words[$i];
                $lineWidth += strlen($words[$i]);
                $i++;
            }

            $numWords = count($lineWords);
            $numSpaces = $maxWidth - $lineWidth;

            if ($i == count($words) || $numWords == 1) {
                $line = implode(' ', $lineWords);
                $line .= str_repeat(' ', $maxWidth - strlen($line));
            } else {
                $spacesBetweenWords = $numSpaces / ($numWords - 1);
                $extraSpaces = $numSpaces % ($numWords - 1);

                $line = '';
                for ($j = 0; $j < $numWords - 1; $j++) {
                    $line .= $lineWords[$j] . str_repeat(' ', $spacesBetweenWords);
                    if ($j < $extraSpaces) {
                        $line .= ' ';
                    }
                }

                $line .= $lineWords[$numWords - 1];
            }
            $result[] = $line;
        }

        return $result;
    }
}
