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
 * @link https://leetcode-cn.com/problems/merge-two-binary-trees/submissions/
 * Class Solution
 */
class Solution {

    /**
     * @param TreeNode $root1
     * @param TreeNode $root2
     * @return TreeNode
     */
    function mergeTrees($root1, $root2) {
        if ($root1 && $root2) {
            $root1->val += $root2->val;
            $root1->left = $this->mergeTrees($root1->left, $root2->left);
            $root1->right = $this->mergeTrees($root1->right, $root2->right);
            return $root1;
        }
        return $root1 ?: $root2;
    }
}
