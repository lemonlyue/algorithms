<?php

/**
 * Class Solution
 * @link https://leetcode-cn.com/problems/nGK0Fy/submissions/
 */
class Solution {

    public $x = 1;

    public $y = 0;

    /**
     * @param String $s
     * @return Integer
     */
    function calculate($s) {
        if (empty($s)) {
            return $this->x + $this->y;
        }

        $array = str_split($s);
        foreach ($array as $item) {
            $this->$item();
        }

        return $this->x + $this->y;
    }

    public function A()
    {
        $this->x = 2 * $this->x + $this->y;
    }

    public function B()
    {
        $this->y = 2 * $this->y + $this->x;
    }
}