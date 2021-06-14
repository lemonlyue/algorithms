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
 * @link https://leetcode-cn.com/problems/er-cha-shu-de-jing-xiang-lcof/
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return TreeNode
     */
    function mirrorTree($root) {
        if ($root === null) {
            return null;
        }
        $temp = $root->left;
        $root->left = $root->right;
        $root->right = $temp;
        $this->mirrorTree($root->left);
        $this->mirrorTree($root->right);
        return $root;
    }

    /**
     * 递归
     */
    function recursive($root) {

    }
}