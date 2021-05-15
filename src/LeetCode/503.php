<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function nextGreaterElements($nums) {
        $count = count($nums);
        $stack = new SplStack();
        $res = array_fill(0, $count, -1);
        for ($i = 0; $i < $count * 2; ++$i) {
            while (!$stack->isEmpty() && $nums[$stack->top()] < $nums[$i % $count]) {
                $res[$stack->pop()] = $nums[$i % $count];
            }
            $stack->push($i % $count);
        }
        return $res;
    }
}

$test = new Solution();
var_dump($test->nextGreaterElements([5,4,3,2,1]));