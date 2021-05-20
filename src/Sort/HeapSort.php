<?php

namespace Lemonlyue\Algorithms\Sort;

/**
 * 堆排序
 *
 * Class HeapSort
 * @package Lemonlyue\Algorithms\Sort
 */
class HeapSort
{
    /**
     * 堆排序
     * @param array $array
     * @return array
     */
    public function sort(array $array): array
    {
        $this->createHeap($array);
        $count = count($array);
        while($count>0) {
            /* 这是一个大顶堆 , 所以堆顶的节点必须是最大的
               根据此特点 , 每次都将堆顶数据移到最后一位
               然后对剩余数据节点再次建造堆就可以 */
            $this->swap($array[0], $array[--$count]);
            $this->bulidHeap($array, 0, $count);
        }
        return $array;
    }

    /**
     * @param array $array
     */
    private function createHeap(array &$array)
    {
        $length = count($array);
        $i = ceil($length/2);
        for(; $i>=0; $i--) {
            $this->bulidHeap($array, $i, $length);
        }
    }

    /**
     * @param array $array
     * @param float $i
     * @param int $length
     */
    private function bulidHeap(array &$array, float $i, int $length)
    {
        // 获取左 / 右节点
        $r = ($l = 2 * $i + 1) + 1;
        $max = $i;

        // 如果左子节点大于当前节点 , 那么记录左节点键名
        $i < $length && $l < $length && $array[$i] < $array[$l] && $max = $l;
        // 如果右节点大于刚刚记录的 $max , 那么再次交换
        $i < $length && $r < $length && $array[$max] < $array[$r] && $max = $r;

        if ($max !== $i && $max < $length) {
            $this->swap($array[$i], $array[$max]);
            $this->bulidHeap($array, $max, $length);
        }
    }

    /**
     * @param $a
     * @param $b
     */
    private function swap(&$a, &$b)
    {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }
}