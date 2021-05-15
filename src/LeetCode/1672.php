<?php

/**
 * Class Solution
 * @link https://leetcode-cn.com/problems/richest-customer-wealth/
 */
class Solution {

    /**
     * @param Integer[][] $accounts
     * @return Integer
     */
    function maximumWealth($accounts) {
        $res = [];
        foreach ($accounts as $account) {
            $res[] = array_sum($account);
        }
        return max($res);
    }
}