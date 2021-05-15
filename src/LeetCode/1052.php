<?php
class Solution {

    /**
     * @param Integer[] $customers
     * @param Integer[] $grumpy
     * @param Integer $X
     * @return Integer
     */
    function maxSatisfied($customers, $grumpy, $X) {
        $total = 0;
        foreach ($customers as $key => $item) {
            if ($grumpy[$key] === 0) {
                $total += $item;
            }
        }
        $count = count($customers);
        $increase = 0;
        for ($i = 0; $i < $X; $i++) {
            $increase += $customers[$i] * $grumpy[$i];
        }
        $maxIncrease = $increase;
        for ($i = $X; $i < $count; $i++) {
            $increase = $increase - $customers[$i - $X] * $grumpy[$i - $X] + $customers[$i] * $grumpy[$i];
            $maxIncrease = max($maxIncrease, $increase);
        }
        return $total + $maxIncrease;
    }
}