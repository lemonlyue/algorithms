<?php

/**
 * Class Solution
 * @link https://leetcode-cn.com/problems/intersection-of-two-arrays/
 */
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersection($nums1, $nums2) {
        $hash = [];
        foreach ($nums1 as $item) {
            $hash[$item] = $item;
        }
        $result = [];
        foreach ($nums2 as $item) {
            if (isset($hash[$item])) {
                $result[$item] = $item;
            }
        }
        return $result;
    }
}