<?php
/**
 * @link https://leetcode-cn.com/problems/maximum-depth-of-binary-tree/submissions/
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
class Solution {

    public $res;

    /**
     * @param TreeNode $root
     * @return Integer
     */
    public function maxDepth($root) {
        if (empty($root)) {
            return 0;
        }
        $this->dfs($root, 1);
        return max($this->res);
    }

    public function dfs($root, $depth) {
        if (empty($root->left) && empty($root->right)) {
            $this->res[] = $depth;
            return $depth;
        }
        if ($root->left) {
            $this->dfs($root->left, $depth + 1);
        }
        if ($root->right) {
            $this->dfs($root->right, $depth + 1);
        }
    }
}