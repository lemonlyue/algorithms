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
 * @link https://leetcode-cn.com/problems/delete-node-in-a-linked-list/
 */
class Solution {
    /**
     * @param ListNode $node
     * @return
     */
    function deleteNode($node) {
        $node->val = $node->next->val;
        $node->next = $node->next->next;
    }
}