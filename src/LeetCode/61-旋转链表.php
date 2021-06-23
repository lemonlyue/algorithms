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
 * @link https://leetcode-cn.com/problems/rotate-list/
 */
class Solution {

    /**
     * @param ListNode $head
     * @param Integer $k
     * @return ListNode
     */
    function rotateRight($head, $k) {
        if ($head === null || $k === 0) {
            return $head;
        }
        $count = 1;
        $startHead = $head;
        $endHead = $head;
        while ($endHead->next !== null) {
            $count++;
            $endHead = $endHead->next;
        }

        $rotateCount = $count - ($k % $count) - 1;
        while ($rotateCount > 0) {
            $startHead = $startHead->next;
            $rotateCount--;
        }
        $endHead->next = $head;
        $result = $startHead->next;
        $startHead->next = null;
        return $result;
    }
}