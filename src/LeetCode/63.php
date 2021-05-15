<?php

/**
 * Class Solution
 * @link https://leetcode-cn.com/problems/unique-paths-ii/
 */
class Solution {

    /**
     * @param Integer[][] $obstacleGrid
     * @return Integer
     */
    function uniquePathsWithObstacles($obstacleGrid) {
        $m = count($obstacleGrid);
        $n = count($obstacleGrid[0]);
        $dp = [];
        foreach ($obstacleGrid as $i => $row) {
            foreach ($row as $j => $column) {
                if ($i === 0 && $j === 0) {
                    $dp[$i][$j] = $column === 1 ? 0 : 1;
                    continue;
                }
                if ($column === 1) {
                    $dp[$i][$j] = 0;
                    continue;
                }
                $dp[$i][$j] = $dp[$i][$j] ?: (int)$dp[$i - 1][$j] + (int)$dp[$i][$j - 1];
                echo $dp[$i][$j];
            }
        }
        return $dp[$m - 1][$n - 1];
    }
}