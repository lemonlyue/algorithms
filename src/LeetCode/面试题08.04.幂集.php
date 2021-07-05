<?php

/**
 * Class Solution
 * @link https://leetcode-cn.com/problems/power-set-lcci/
 */
class Solution
{

    /** @var array $result */
    protected $result = [];

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function subsets($nums)
    {
        $this->recursive($nums, 0, []);
        return $this->result;
    }

    function recursive($nums, $index, $array)
    {
        $this->result[] = $array;
        $count = count($nums);
        for ($i = $index; $i < $count; $i++) {
            $array[] = $nums[$i];
            $this->recursive($nums, $i + 1, $array);
            array_pop($array);
        }
    }
}