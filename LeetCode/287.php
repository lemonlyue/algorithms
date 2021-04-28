<?php

/**
 * Class Solution
 * @link https://leetcode-cn.com/problems/find-the-duplicate-number/
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findDuplicate($nums) {
        sort($nums);
        // 双指针
        foreach ($nums as $key => $num) {
            if ($num === $nums[$key + 1]) {
                return $num;
            }
        }
    }
}