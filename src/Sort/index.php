<?php

use Lemonlyue\Algorithms\Sort\BubbleSort;
use Lemonlyue\Algorithms\Sort\HeapSort;
use Lemonlyue\Algorithms\Sort\QuickSort;

require '../../vendor/autoload.php';

$array = [1, 5, 8, 3, 5, 10, 23, 6, 26];

// 冒泡排序
$bubble = new BubbleSort();
// 常用
var_dump($bubble->sort($array));

// 快速排序
$quick = new QuickSort();
// 普通
var_dump($quick->sort($array));
// 三数取中
var_dump($quick->sort2($array, 0, count($array) - 1));

// 堆排序
$heap = new HeapSort();
var_dump($heap->sort($array));