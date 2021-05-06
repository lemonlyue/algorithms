<?php

/**
 * Class Solution
 * @link https://leetcode-cn.com/problems/top-k-frequent-elements/
 */
class Solution {

    /**
     * 哈希表解法
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    function topKFrequent($nums, $k) {
        $hash = [];
        foreach ($nums as $num) {
            if (isset($hash[$num])) {
                $hash[$num]++;
            } else {
                $hash[$num] = 1;
            }
        }

        arsort($hash);
        $result = [];
        foreach ($hash as $key => $item) {
            $result[] = $key;
            if (count($result) === $k) {
                break;
            }
        }
        return $result;
    }

    /**
     * 大顶堆解法
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    function topKFrequent2($nums, $k) {
        $hash = [];
        foreach ($nums as $num) {
            if (isset($hash[$num])) {
                $hash[$num]++;
            } else {
                $hash[$num] = 1;
            }
        }
        $priorityQueue = new SplPriorityQueue();
        foreach ($hash as $num => $item) {
            $priorityQueue->insert($num, $item);
        }
        $result = [];
        for ($i = 0; $i < $k; $i++) {
            $result[] = $priorityQueue->extract();
        }
        return $result;
    }
}