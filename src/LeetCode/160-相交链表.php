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
 * @link https://leetcode-cn.com/problems/intersection-of-two-linked-lists/submissions/
 */
class Solution {
    /**
     * @param ListNode $headA
     * @param ListNode $headB
     * @return ListNode
     */
    function getIntersectionNode($headA, $headB) {
        // hash解法
        $currentNode = $headA;
        $hash = [];
        while ($currentNode !== null) {
            $hash[] = $currentNode;
            $currentNode = $currentNode->next;
        }
        $currentNode = $headB;
        while ($currentNode !== null) {
            if (in_array($currentNode, $hash, true)) {
                return $currentNode;
            }
            $currentNode = $currentNode->next;
        }
        return null;
    }

    /**
     * @param ListNode $headA
     * @param ListNode $headB
     * @return ListNode
     */
    function getIntersectionNode2($headA, $headB) {
        // 双指针解法
        $head1 = $headA;
        $head2 = $headB;
        while ($head1 !== $head2) {
            if ($head1 !== null) {
                $head1 = $head1->next;
            } else {
                $head1 = $headB;
            }
            if ($head2 !== null) {
                $head2 = $head2->next;
            } else {
                $head2 = $headA;
            }
        }
        return $head1;
    }
}