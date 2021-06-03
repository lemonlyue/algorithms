<?php
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */

/**
 * Class Solution
 * @link https://leetcode-cn.com/problems/linked-list-cycle/
 */
class Solution {

    /**
     * 哈希表
     *
     * @param ListNode $head
     * @return Boolean
     */
    function hasCycle($head) {
        $hash = [];
        while ($head) {
            if (in_array($head, $hash, true)) {
                return true;
            }
            $hash[] = $head;
            $head = $head->next;
        }
        return false;
    }
    
    /**
     * 快慢指针
     *
     * @param ListNode $head
     * @return Boolean
     */
    function hasCycle2($head) {
        $hash = [];
        $quick = $head->next;
        $slow = $head;
        while ($quick && $slow) {
            if ($quick === $slow) {
                return true;
            }
            $quick = $quick->next->next;
            $slow = $slow->next;
        }
        return false;
    }
}