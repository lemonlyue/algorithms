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
 * @link https://leetcode-cn.com/problems/kth-smallest-element-in-a-bst/
 */
class Solution {

    public $array = [];

    public $tree = [];

    /**
     * 递归
     * @param TreeNode $root
     * @param Integer $k
     * @return Integer
     */
    function kthSmallest($root, $k) {
        $this->recursive($root);
        sort($this->array);
        return $this->array[$k - 1];
    }

    function recursive($root) {
        if ($root === null) {
            return ;
        }
        if ($root->val !== nulll) {
            $this->array[] = $root->val;
        }
        $this->recursive($root->left);
        $this->recursive($root->right);
        return ;
    }

    /**
     * 前序遍历
     * @param TreeNode $root
     * @param Integer $k
     * @return Integer
     */
    function kthSmallest2($root, $k) {
        if ($root === null) {
            return ;
        }
        $stack = [];
        $stack[] = $root;
        while (!empty($stack)) {
            // 弹出最后一个元素
            $tree = array_pop($stack);
            $this->tree[] = $tree->val;
            // 先把右节点压进stack, 原因是先弹出最后一个处理, 要确保先处理左节点
            if ($tree->right !== null) {
                $stack[] = $tree->right;
            }
            // 后压左节点, 保持左节点在stack最后
            if ($tree->left !== null) {
                $stack[] = $tree->left;
            }
        }
        sort($this->tree);
        return $this->tree[$k - 1];
    }
}