<?php


namespace Lemonlyue\Algorithms\BinaryTree;

/**
 * Class BinaryTreeSort
 * @package Lemonlyue\Algorithms\BinaryTree
 */
class BinaryTreeSort
{
    /**
     * 前序遍历
     * 根节点->左节点->右节点
     * @param Node $root
     */
    public function preorder(Node $root)
    {
        if ($root === null) {
            return ;
        }
        $stack = [];
        $stack[] = $root;
        while (!empty($stack)) {
            // 弹出最后一个元素
            $tree = array_pop($stack);
            echo $tree->val . ' ';
            // 先把右节点压进stack, 原因是先弹出最后一个处理, 要确保先处理左节点
            if ($tree->right !== null) {
                $stack[] = $tree->right;
            }
            // 后压左节点, 保持左节点在stack最后
            if ($tree->left !== null) {
                $stack[] = $tree->left;
            }
        }
    }

    /**
     * 中序遍历
     * 左节点->根节点->右节点
     * @param Node $root
     */
    public function inorder(Node $root)
    {
        $stack = [];
        $tree = $root;
        while (!empty($stack) || $tree !== null) {
            while ($tree !== null) {
                // 把左节点全压进stack中
                $stack[] = $tree;
                $tree = $tree->left;
            }
            // 弹出最尾部的左节点
            $tree = array_pop($stack);
            echo $tree->val . ' ';
            // 将右节点赋值给tree, 判断当前右节点是否有左节点, 继续处理左节点, 如无左节点后, 再处理右节点
            $tree = $tree->right;
        }
    }

    /**
     * 后序遍历
     * 左节点->右节点->根节点
     * @param Node $root
     */
    public function postorder(Node $root)
    {
        $stack = [];
        $outStack = [];
        $stack[] = $root;
        while (!empty($stack)) {
            // 把根节点先压入outStack, 最后弹出
            $tree = array_pop($stack);
            $outStack[] = $tree;
            // 先将左节点压入stack, 后压入outStack
            if ($tree->left !== null) {
                $stack[] = $tree->left;
            }
            // 后将右节点压入stack, 先压入outStack
            if ($tree->right !== null) {
                $stack[] = $tree->right;
            }
        }

        while (!empty($outStack)) {
            $currentTree = array_pop($outStack);
            echo $currentTree->val . ' ';
        }
    }
}