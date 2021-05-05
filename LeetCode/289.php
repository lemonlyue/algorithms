<?php

/**
 * Class Solution
 * @link https://leetcode-cn.com/problems/game-of-life/
 */
class Solution {

    /**
     * @param Integer[][] $board
     * @return NULL
     */
    function gameOfLife(&$board) {
        $arr = [];
        foreach ($board as $row => &$item) {
            foreach ($item as $col => &$value) {
                $count = 0;
                $count += $board[$row - 1][$col - 1] ? 1 : 0;
                $count += $board[$row - 1][$col] ? 1 : 0;
                $count += $board[$row - 1][$col + 1] ? 1 : 0;
                $count += $board[$row][$col - 1] ? 1 : 0;
                $count += $board[$row][$col + 1] ? 1 : 0;
                $count += $board[$row + 1][$col - 1] ? 1 : 0;
                $count += $board[$row + 1][$col] ? 1 : 0;
                $count += $board[$row + 1][$col + 1] ? 1 : 0;
                $val = $value;
                if (($count >= 2 || $count <= 3) && $value === 1) {
                    $val = 1;
                }
                if ($count > 3 && $value === 1) {
                    $val = 0;
                }
                if ($count < 2 && $value === 1) {
                    $val = 0;
                }
                if ($count === 3 && $value === 0) {
                    $val = 1;
                }
                if ($val !== $value) {
                    $arr[] = [
                        'row' => $row,
                        'col' => $col,
                        'value' => $val
                    ];
                }
            }
        }
        foreach ($arr as $ar) {
            $board[$ar['row']][$ar['col']] = $ar['value'];
        }
        return $board;
    }
}