<?php/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */

/**
 * Class Solution
 * @link https://leetcode-cn.com/problems/merge-in-between-linked-lists/
 */
class Solution {

    /**
     * @param ListNode $list1
     * @param Integer $a
     * @param Integer $b
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeInBetween($list1, $a, $b, $list2) {
        $left = $list1;
        $num = 0;
        // 先拼接 a 位置与 list2
        while ($num < $a - 1) {
            $left = $left->next;
            ++$num;
        }
        $right = $left;
        while ($num <= $b) {
            $right = $right->next;
            ++$num;
        }
        $left->next = $list2;
        while ($list2->next) {
            $list2 = $list2->next;
        }
        $list2->next = $right;
        return $list1;
    }
}