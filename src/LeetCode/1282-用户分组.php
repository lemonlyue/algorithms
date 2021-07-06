<?php

/**
 * Class Solution
 * @link https://leetcode-cn.com/problems/group-the-people-given-the-group-size-they-belong-to/
 */
class Solution {

    /**
     * @param Integer[] $groupSizes
     * @return Integer[][]
     */
    function groupThePeople($groupSizes) {
        $result = [];
        $group = [];
        foreach ($groupSizes as $key => $groupSize) {
            $group[$groupSize][] = $key;
        }
        foreach ($group as $key => $item) {
            foreach ($item as $value) {
                $array[] = $value;
                if (count($array) === $key) {
                    $result[] = $array;
                    $array = [];
                }
            }
        }
        return $result;
    }
}