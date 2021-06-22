<?php

/**
 * Class Solution
 * @link https://leetcode-cn.com/problems/arranging-coins/
 */
class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function arrangeCoins($n) {
        if ($n === 1) {
            return $n;
        }
        $sum = 0;
        for ($i = 1; $i < $n; $i++) {
            $sum += $i;
            if ($sum > $n) {
                break;
            }
        }
        return $i - 1;
    }
}