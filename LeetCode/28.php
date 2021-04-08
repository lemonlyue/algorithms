<?php
class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        $i = 0;
        $j = 0;
        $start = 0;
        while ($haystack[$i] && $needle[$j]) {
            if ($haystack[$i] === $needle[$j]) {
                $i++;
                $j++;
            } else {
                $start++;
                $i = $start;
                $j = 0;
            }
        }
        if ($j === strlen($needle)) {
            return $i - $j;
        }
        return -1;
    }
}
//"mississippi"
//"issip"

//"aabaabbbaabbbbabaaab"
//"abaa"
$test = new Solution();
var_dump($test->strStr('aabaabbbaabbbbabaaab', 'abaa'));