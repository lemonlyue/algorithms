<?php

/**
 * Class Solution
 * @link https://leetcode-cn.com/problems/reverse-words-in-a-string/
 */
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        $array = array_filter(explode(' ', $s), function ($value) {
            $value = str_replace(' ', '', $value);
            if (!empty($value)){
                return true;
            }
            if (is_numeric($value)) {
                return true;
            }
            return false;
        });
        $array = array_reverse($array);
        return implode(' ', $array);
    }
}