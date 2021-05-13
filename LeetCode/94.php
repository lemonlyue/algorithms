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
 * @link https://leetcode-cn.com/problems/binary-tree-inorder-traversal/
 */
class Solution {

    public $array = [];

    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    function inorderTraversal($root) {
        $stack = [];
        $tree = $root;
        while (!empty($stack) || !empty($tree)) {
            while (!empty($tree)) {
                $stack[] = $tree;
                $tree = $tree->left;
            }
            $tree = array_pop($stack);
            $this->array[] = $tree->val;
            $tree = $tree->right;
        }
        return $this->array;
    }
}