<?php

/**
 * Class Solution
 * @link https://leetcode-cn.com/problems/kth-largest-element-in-an-array/submissions/
 */
class Solution
{
    function findKthLargest($nums, $k)
    {
        // 大顶堆
        $heap = new SplMinHeap();
        foreach ($nums as $iValue) {
            if ($heap->count() < $k) {
                $heap->insert($iValue);
            } elseif ($heap->top() < $iValue) {
                $heap->extract();
                $heap->insert($iValue);
            }
        }

        return $heap->top();
    }

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function findKthLargest2($nums, $k) {
        $count = count($nums);
        // 快速排序
        $nums = $this->quickSort($nums, 0, $count - 1);
        return $nums[$count - $k];
    }

    /**
     * 快速排序
     *
     * @param array $array
     * @param int $left
     * @param int $right
     * @return mixed
     */
    function quickSort(array &$array, int $left, int $right): array
    {
        if ($left < $right) {
            $pivot = $this->partition($array, $left, $right);
            $this->quickSort($array, $left, $pivot - 1);
            $this->quickSort($array, $pivot + 1, $right);
        }
        return $array;
    }

    /**
     * 分区, 返回基准值
     *
     * @param array $array
     * @param int $left
     * @param int $right
     * @return int|mixed
     */
    private function partition(array &$array, int $left, int $right)
    {
        if ($left === $right) {
            return null;
        }
        $this->dealPivot($array, $left, $right);
        $compare = $array[$left];
        while ($left !== $right) {
            // 判断右边是否小于基准, 小于基准时赋值到左边
            while ($right && $right !== $left) {
                if ($compare > $array[$right]) {
                    $array[$left++] = $array[$right];
                    break;
                }
                $right--;
            }

            // 判断左边是否大于基准, 大于基准时赋值到右边
            while ($left && $left !== $right) {
                if ($array[$left] > $compare) {
                    $array[$right--] = $array[$left];
                    break;
                }
                $left++;
            }
        }
        // 基准赋值到替换位置
        $array[$right] = $compare;
        return $right;
    }

    /**
     * 基准取中位数 三数取中
     *
     * @param array $array
     * @param int $left
     * @param int $right
     */
    private function dealPivot(array &$array, int $left, int $right)
    {
        $middle = ($left + $right) / 2;
        if (($array[$left] - $array[$middle]) * ($array[$middle] - $array[$right]) > 0) {
            $this->swap($array, $left, $middle);
            return ;
        }
        if (($array[$middle] - $array[$left]) * ($array[$left] - $array[$right]) > 0) {
            return ;
        }
        $this->swap($array, $left, $right);
    }

    /**
     * 交换
     *
     * @param array $array
     * @param int $left
     * @param int $right
     */
    private function swap(array &$array, int $left, int $right)
    {
        $temp = $array[$left];
        $array[$left] = $array[$right];
        $array[$right] = $temp;
    }
}

$test = new Solution();
$res = $test->findKthLargest([1,4,3,23,6,4,3], 2);
var_dump($res);