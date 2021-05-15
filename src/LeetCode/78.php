<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function subsets($nums) {
        $res = [[]];
        foreach ($nums as $num) {
            foreach ($res as $re) {
                $tmp = $re;
                $tmp[] = $num;
                $res[] = $tmp;
            }
        }
        return $res;
    }
}

$test = new Solution();
var_dump($test->subsets([1, 2, 3]));