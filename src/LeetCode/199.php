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
class Solution {

    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    function rightSideView($root) {
        $array[] = $root;
        $result = [];
        // 层级遍历
        while ($array) {
            $val = null;
            foreach ($array as $item) {
                $node = array_shift($array);
                if ($node->left) {
                    $array[] = $node->left;
                }
                if ($node->right) {
                    $array[] = $node->right;
                }
                if ($node->val !== null) {
                    $val = $node->val;
                }
            }
            $result[] = $val;
        }
        return $result;
    }
}