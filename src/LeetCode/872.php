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
 * @link https://leetcode-cn.com/problems/leaf-similar-trees/
 */
class Solution {

    public $leaves = [];

    /**
     * @param TreeNode $root1
     * @param TreeNode $root2
     * @return Boolean
     */
    function leafSimilar($root1, $root2) {
        $this->getLeaves($root1);
        $leaves1 = $this->leaves;
        $this->leaves = [];
        $this->getLeaves($root2);
        $leaves2 = $this->leaves;
        return $leaves1 === $leaves2;
    }

    /**
     * 获取叶子节点
     * @param TreeNode $root
     */
    function getLeaves($root) {
        if ($root === null) {
            return ;
        }
        if ($root->left === null && $root->right === null && $root->val !== null) {
            $this->leaves[] = $root->val;
            return ;
        }
        $this->getLeaves($root->left);
        $this->getLeaves($root->right);
        return ;
    }
}