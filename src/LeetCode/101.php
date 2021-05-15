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
 * @link https://leetcode-cn.com/problems/symmetric-tree/
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return Boolean
     */
    function isSymmetric($root) {
        if ($root === null) {
            return true;
        }
        $left = $root->left;
        $right = $root->right;
        return $this->recursive($left, $right);
    }

    /**
     * 递归做法
     * @param $left
     * @param $right
     * @return bool
     */
    function recursive($left, $right) {
        if (($left !== null && $right !== null && $left->val === $right->val)) {
            $res1 = $this->recursive($left->right, $right->left);
            $res2 = $this->recursive($left->left, $right->right);
            return $res1 && $res2;
        }
        return $left === null && $right === null;
    }
}