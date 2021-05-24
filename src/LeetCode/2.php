<?php
/**
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
 * @link https://leetcode-cn.com/problems/add-two-numbers/
 */
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $root = new ListNode();
        $pre = $root;
        $carry = 0;
        while ($l1 !== null || $l2 !== null || $carry !== 0) {
            $sum = $carry;
            if ($l1 !== null) {
                $sum += $l1->val;
                $l1 = $l1->next;
            }
            if ($l2 !== null) {
                $sum += $l2->val;
                $l2 = $l2->next;
            }
            $carry = $sum > 9 ? 1 : 0;
            $sum = $sum <= 9 ? $sum : $sum - 10;
            $pre->next = new ListNode($sum);
            $pre = $pre->next;
        }

        return $root->next;
    }
}