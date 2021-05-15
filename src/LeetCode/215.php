<?php
class Solution
{
    function findKthLargest($nums, $k)
    {
        $n = count($nums);
        $heap = new SplMinHeap();
        for ($i = 0; $i < $n; ++$i) {
            if ($heap->count() < $k) {
                $heap->insert($nums[$i]);
            } elseif ($heap->top() < $nums[$i]) {
                $heap->extract();
                $heap->insert($nums[$i]);
            }
        }
        var_dump($heap);

        return $heap->top();
    }
}

$test = new Solution();
$res = $test->findKthLargest([1,4,3,23,6,4,3], 2);
var_dump($res);