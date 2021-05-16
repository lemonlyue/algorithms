<?php

namespace Lemonlyue\Algorithms\Sort;

/**
 * 冒泡排序
 *
 * Class BubbleSort
 * @package Lemonlyue\Algorithms\Sort
 */
class BubbleSort
{
    /**
     * 冒泡排序-常规
     *
     * @param array $array
     * @return array
     */
    public function sort(array $array): array
    {
        $count = count($array);
        for ($i = 0; $i < $count - 1; $i++) {
            for ($j = 0; $j < $count - $i - 1; $j++) {
                if ($array[$j] > $array[$j + 1]) {
                    $temp = $array[$j + 1];
                    $array[$j + 1] = $array[$j];
                    $array[$j] = $temp;
                }
            }
        }
        return $array;
    }
}