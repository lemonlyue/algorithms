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
 * @link https://leetcode-cn.com/problems/invert-binary-tree/submissions/
 * Class Solution
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return TreeNode
     */
    function invertTree($root) {
        if (empty($root)) {
            return $root;
        }
        $left = $root->left;
        $right = $root->right;
        $root->left = $this->invertTree($right);
        $root->right = $this->invertTree($left);
        return $root;
    }
}