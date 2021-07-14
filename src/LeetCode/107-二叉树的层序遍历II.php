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
 * @link https://leetcode-cn.com/problems/binary-tree-level-order-traversal-ii/
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return Integer[][]
     */
    function levelOrderBottom($root) {
        $result = [];
        if ($root === null) {
            return $result;
        }
        $array = [];
        $array[] = $root;
        while ($count = count($array)) {
            $res = [];
            for ($i = 0; $i < $count; ++$i) {
                $tree = array_pop($array);
                if ($tree->left !== null) {
                    array_unshift($array, $tree->left);
                }
                if ($tree->right !== null) {
                    array_unshift($array, $tree->right);
                }
                $res[] = $tree->val;
            }
            $result[] = $res;
        }
        return array_reverse($result);
    }
}