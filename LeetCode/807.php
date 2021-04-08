<?php
class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function maxIncreaseKeepingSkyline($grid) {
        // 水平方向
        $horizontal = [];
        $verticalArr = [];
        // 垂直方向
        $vertical = [];
        $num = 0;
        foreach ($grid as $item) {
            $horizontal[] = max($item);
            foreach ($item as $key => $value) {
                $verticalArr[$key][] = $value;
            }
        }
        foreach ($verticalArr as $item) {
            $vertical[] = max($item);
        }
        foreach ($grid as $key => $item) {
            foreach ($item as $k => $value) {
                if ($vertical[$k] > $value && $horizontal[$key] > $value) {
                    $min = min($horizontal[$key], $vertical[$k]);
                    $num += $min - $value;
                }
//                if ($horizontal[$key] > $value) {
//                    $num += $horizontal[$key] - $value;
//                }
            }
        }
        var_dump($num);
    }
}