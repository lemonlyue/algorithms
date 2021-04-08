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


class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}

class Solution {
    function reverseList($head) {
        var_dump($head);
        if ($head === null || $head->next === null) {
            return $head;
        }

        $res = $this->reverseList($head->next);
        var_dump($res);

        $head->next->next = $head;
        var_dump($head);
        $head->next = null;
        var_dump($head);
        return $head;
    }
}

for ($i = 1; $i < 6; $i++) {
    $listNode = new ListNode($i, $i + 1);
}