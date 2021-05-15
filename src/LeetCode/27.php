<?php

/**
 * @link https://leetcode-cn.com/problems/remove-element/
 * Class Solution
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        $len = 0;
        foreach ($nums as $num) {
            if ($num !== $val) {
                $nums[$len] = $num;
                $len++;
            }
        }
        return $len;
    }
}