<?php

/**
 * @link https://leetcode-cn.com/problems/unique-paths/
 * Class Solution
 */
class Solution {

    /**
     * @param Integer $m
     * @param Integer $n
     * @return Integer
     */
    function uniquePaths($m, $n) {
        if ($m === 1 && $n === 1) {
            return 1;
        }
        $dp = [];
        $dp[0][1] = 1;
        $dp[1][0] = 1;
        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) {
                $dp[$i][$j] = $dp[$i][$j] ?: (int)$dp[$i - 1][$j] + (int)$dp[$i][$j - 1];
            }
        }
        return $dp[$m - 1][$n - 1];
    }
}