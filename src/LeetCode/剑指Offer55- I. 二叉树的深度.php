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
 * @link https://leetcode-cn.com/problems/er-cha-shu-de-shen-du-lcof/
 */
class Solution {

    /**
     * 层序遍历二叉树
     *
     * @param TreeNode $root
     * @return Integer
     */
    function maxDepth($root) {
        $res = 0;
        if ($root === null) return $res;
        $queue = new SplQueue();
        $queue->enqueue($root);
        while ($count = $queue->count()) {
            for ($i = 0; $i < $count; ++$i) {
                $node = $queue->dequeue();
                if ($node->left !== null) $queue->enqueue($node->left);
                if ($node->right !== null) $queue->enqueue($node->right);
            }
            $res++;
        }
        return $res;
    }
}