<?php
class Solution {

    /** @var Integer[][] $res */
    public $res = [];

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    public function permute($nums) {
        $this->back($nums, []);
        return $this->res;
    }

    /**
     * 递归
     * @param array $nums
     * @param array $arr
     * @return array
     */
    public function back($nums, $arr) {
        if (count($nums) === count($arr)) {
            $this->res[] = $arr;
            return $this->res;
        }
        foreach ($nums as $num) {
            // 如果不存在, 则存入arr
            if (!in_array($num, $arr, true)) {
                $arr[] = $num;
                $this->back($nums, $arr);
                // 弹出一个
                array_pop($arr);
            }
        }
    }
}
// 1) arr[] 1
// 2) arr[] 1 2
// 3) arr[] 1 2 3
// 4) arr[] 1 2
// 5) arr[] 1
// 6) arr[] 1 3
// 7) arr[] 1 3 2
// 8) arr[] 1 3
// 9) arr[] 1
// 10) arr[]

$test = new Solution();
$res = $test->permute([1, 2, 3]);
//var_dump($res);