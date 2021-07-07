<?php

/**
 * Class Solution
 * @link https://leetcode-cn.com/problems/display-table-of-food-orders-in-a-restaurant/
 */
class Solution {

    /**
     * @param String[][] $orders
     * @return String[][]
     */
    function displayTable($orders) {
        $directory = [];
        $foods = [];
        foreach ($orders as $order) {
            [$name, $table, $food] = $order;
            if (!in_array($food, $directory, true)) {
                $directory[] = $food;
            }
            $foods[$table][$food] += 1;
        }
        ksort($foods);
        $result = [];
        sort($directory);
        array_unshift($directory, 'Table');
        foreach ($foods as $key => $item) {
            $temp = [
                (string)$key
            ];
            foreach ($directory as $index => $value) {
                if ($index === 0) {
                    continue;
                }
                $temp[] = (string)$item[$value] ?: '0';
            }
            $result[] = $temp;
        }
        array_unshift($result, $directory);
        return $result;
    }
}