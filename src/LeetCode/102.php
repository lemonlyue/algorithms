<?php
/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */

/**
 * Class Solution
 * @link https://leetcode-cn.com/problems/binary-tree-level-order-traversal/
 */
class Solution {

    /**
     * @var array
     */
    protected $result = [];

    /**
     * 递归
     * @param TreeNode $root
     * @return Integer[][]
     */
    function levelOrder($root) {
        $this->recursive($root);
        return $this->result;
    }

    /**
     * 队列
     * @param $root
     * @return array
     */
    function levelOrder2($root) {

        $res = [];
        if ($root === null) return $res;
        $queue = new SplQueue();
        $queue->enqueue($root);
        while ($count = $queue->count()) {
            $currentLevel = [];
            for ($i = 0; $i < $count; ++$i) {
                $node = $queue->dequeue();
                $currentLevel[] = $node->val;
                if ($node->left !== null) $queue->enqueue($node->left);
                if ($node->right !== null) $queue->enqueue($node->right);
            }
            $res[] = $currentLevel;
        }
        return $res;
    }

    /**
     * @param TreeNode $root
     * @param int $level
     * @return bool
     */
    function recursive($root, $level = 0) {
        if ($root->val === null && $root->left === null && $root->right === null) {
            return true;
        }
        if ($root->val !== null) {
            $this->result[$level][] = $root->val;
        }
        $level++;
        $this->recursive($root->left, $level);
        $this->recursive($root->right, $level);
        return true;
    }
}