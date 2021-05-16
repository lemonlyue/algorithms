<?php


namespace Lemonlyue\Algorithms\Sort;


class QuickSort
{
    /**
     * 快速排序
     *
     * @param array $array
     * @return array
     */
    public function sort(array $array): array
    {
        $count = count($array);
        if ($count <= 1) {
            return $array;
        }
        $pivot = $array[0];
        $leftArray = [];
        $rightArray = [];
        for ($i = 1; $i < $count; $i++) {
            if ($array[$i] > $pivot) {
                $rightArray[] = $array[$i];
            } else {
                $leftArray[] = $array[$i];
            }
        }
        $leftArray = $this->sort($leftArray);
        $rightArray = $this->sort($rightArray);
        return array_merge($leftArray, (array)$pivot, $rightArray);
    }

    /**
     * 快速排序-2
     *
     * @param array $array
     * @param int $left
     * @param int $right
     * @return mixed
     */
    function sort2(array &$array, int $left, int $right): array
    {
        if ($left < $right) {
            $pivot = $this->partition($array, $left, $right);
            $this->sort2($array, $left, $pivot - 1);
            $this->sort2($array, $pivot + 1, $right);
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
            return ;
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