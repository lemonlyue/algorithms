<?php
class Solution {

    /**
     * @param Integer[][] $matrix
     * @return Integer[][]
     */
    function transpose($matrix) {
        $arr = [];
        foreach ($matrix as $row => $rowData) {
            foreach ($rowData as $column => $item) {
                $arr[$column][$row] = $item;
            }
        }
        return $arr;
    }
}