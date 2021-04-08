<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $index = 0;
        $count = count($nums);
        foreach ($nums as $iValue) {
            if ($iValue !== 0) {
                $nums[$index++] = $iValue;
            }
        }
        for ($i = $index; $i < $count; $i++) {
            $nums[$i] = 0;
        }
        return $nums;
    }
}
$test = new Solution();
//$arr = [0, 1, 0, 3, 12];
$arr = [0, 0, 1];
var_dump($test->moveZeroes($arr));