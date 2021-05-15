<?php
class Solution {

    public $res = [];

    /**
     * @param Integer $n
     * @return String[]
     */
    public function generateParenthesis($n) {
        // 如果为0返回空数组
        if ($n <= 0) {
            return $this->res;
        }
        // 递归
        $this->recursive($n, $n, '');
        return $this->res;
    }

    /**
     * @param int $leftCount
     * @param int $rightCount
     * @param string $str
     */
    public function recursive($leftCount, $rightCount, $str)
    {
        var_dump($leftCount, $rightCount, $str);
        // 终止条件, 左括号数量与右括号数量都为0
        if ($leftCount === 0 && $rightCount === 0) {
            $this->res[] = $str;
            return;
        }
        // 左括号数量与右括号数量相等时, 只能拼接左括号
        if ($leftCount === $rightCount) {
            $str .= '(';
            $leftCount--;
            $this->recursive($leftCount, $rightCount, $str);
        } else {
            // 左括号与右括号数量不等时，可以有两种情况
            if ($leftCount > 0) {
                $this->recursive($leftCount - 1, $rightCount, $str . '(');
            }
            $this->recursive($leftCount, $rightCount - 1, $str . ')');
        }
    }
}

$solution = new Solution();
var_dump($solution->generateParenthesis(3));