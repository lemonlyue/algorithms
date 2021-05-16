<?php

use Lemonlyue\Algorithms\Sort\BubbleSort;

require '../../vendor/autoload.php';

$array = [1, 5, 8, 3, 5, 10, 23, 6, 26];

// 冒泡排序
$bubble = new BubbleSort();
// 常用
var_dump($bubble->sort($array));