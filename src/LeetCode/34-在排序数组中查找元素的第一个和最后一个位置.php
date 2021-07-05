<?php

/**
 * Class Solution
 * @link https://leetcode-cn.com/problems/find-first-and-last-position-of-element-in-sorted-array/
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function searchRange($nums, $target) {
        $count = count($nums);
        $left = 0;
        $right = $count - 1;
        $leftValue = -1;
        $rightValue = -1;
        while ($left <= $right) {
            $middle = $left + floor(($right - $left) / 2);
            if ($nums[$middle] > $target) {
                $right = $middle - 1;
            } elseif ($nums[$middle] < $target) {
                $left = $middle + 1;
            } else {
                $left = $middle;
                $right = $middle;
                while (($leftBool = $nums[$left] === $target) || ($rightBool = $nums[$right] === $target)) {
                    if ($leftBool) {
                        $leftValue = $left;
                        $left--;
                    }
                    if ($rightBool) {
                        $rightValue = $right;
                        $right++;
                    }
                }
                return [
                    $leftValue, $rightValue
                ];
            }
        }
        return [
            $leftValue, $rightValue
        ];
    }
}