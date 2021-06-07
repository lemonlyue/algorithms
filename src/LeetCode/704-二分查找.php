<?php

/**
 * Class Solution
 * @link https://leetcode-cn.com/problems/binary-search/
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {
        $count = count($nums);
        $left = 0;
        $right = $count - 1;
        while ($left <= $right) {
            $middle = $left + floor(($right - $left) / 2);
            if ($nums[$middle] > $target) {
                $right = $middle - 1;
            } elseif ($nums[$middle] < $target) {
                $left = $middle + 1;
            } else {
                return $middle;
            }
        }
        return -1;
    }
}