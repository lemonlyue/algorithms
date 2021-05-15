<?php
class Solution {

    public $res = [];
    
    /**
     * @param Integer[] $candidates
     * @param Integer $target
     * @return Integer[][]
     */
    function combinationSum($candidates, $target) {
        sort($candidates);
        $this->search($candidates, [], $target);
        return $this->res;
    }

    
    public function search($candidates, $array, $target)
    {
        $sum = array_sum($array);
        if ($sum === $target) {
            sort($array);
            if (!in_array($array, $this->res, true)) {
                $this->res[] = $array;
            }
            return true;
        }
        if ($sum > $target) {
            return false;
        }
        foreach ($candidates as $candidate) {
            $array[] = $candidate;
            $result = $this->search($candidates, $array, $target);
            if ($result === false) {
                return ;
            }
            array_pop($array);
        }
    }
}

$test = new Solution();
$res = $test->combinationSum([2, 3, 6, 7], 7);
var_dump($res);