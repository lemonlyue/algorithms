<?php
/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */

/**
 * Class Solution
 * @link https://leetcode-cn.com/problems/cong-shang-dao-xia-da-yin-er-cha-shu-ii-lcof/
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return Integer[][]
     */
    function levelOrder($root) {
        $res = [];
        if ($root === null) return $res;
        $queue = new SplQueue();
        $queue->enqueue($root);
        while ($count = $queue->count()) {
            $data = [];
            for ($i = 0; $i < $count; ++$i) {
                $node = $queue->dequeue();
                $data[] = $node->val;
                if ($node->left !== null) $queue->enqueue($node->left);
                if ($node->right !== null) $queue->enqueue($node->right);
            }

            $res[] = $data;
        }
        return $res;
    }
}