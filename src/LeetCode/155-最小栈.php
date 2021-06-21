<?php

/**
 * Class MinStack
 * @link https://leetcode-cn.com/problems/min-stack/
 */
class MinStack
{
    /**
     * @var SplStack
     */
    protected $stack;

    /**
     * @var SplStack
     */
    protected $minStack;

    /**
     * initialize your data structure here.
     */
    function __construct()
    {
        $this->stack = new SplStack();
        $this->minStack = new SplStack();
    }

    /**
     * @param Integer $val
     * @return NULL
     */
    function push($val)
    {
        $this->stack->push($val);
        if ($this->minStack->isEmpty() || $val <= $this->minStack->top()) {
            $this->minStack->push($val);
        }
    }

    /**
     * @return NULL
     */
    function pop()
    {
        $val = null;
        if ($this->stack->count()) {
            $val = $this->stack->pop();
        }
        if (isset($val) && $this->minStack->count() && $this->minStack->top() === $val) {
            $this->minStack->pop();
        }
    }

    /**
     * @return Integer
     */
    function top()
    {
        if ($this->stack->isEmpty()) {
            return null;
        }
        return $this->stack->top();
    }

    /**
     * @return Integer
     */
    function getMin()
    {
        if ($this->minStack->isEmpty()) {
            return null;
        }
        return $this->minStack->top();
    }
}
/**
 * Your MinStack object will be instantiated and called as such:
 * $obj = MinStack();
 * $obj->push($val);
 * $obj->pop();
 * $ret_3 = $obj->top();
 * $ret_4 = $obj->getMin();
 */