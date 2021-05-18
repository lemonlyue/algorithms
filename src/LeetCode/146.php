<?php

/**
 * Class LRUCache
 * @link https://leetcode-cn.com/problems/lru-cache/submissions/
 */
class LRUCache {

    /**
     * 容量
     * @var int $capacity
     */
    protected $capacity;

    /**
     * @var array $data
     */
    protected $data = [];

    /**
     * @param Integer $capacity
     */
    function __construct($capacity) {
        $this->capacity = $capacity;
    }

    /**
     * @param Integer $key
     * @return Integer
     */
    function get($key) {
        $result = $this->data[$key] ?? -1;
        // 如果存在则放置数组最后一位
        if ($result !== -1) {
            unset($this->data[$key]);
            $this->data[$key] = $result;
        }
        return $result;
    }

    /**
     * @param Integer $key
     * @param Integer $value
     * @return NULL
     */
    function put($key, $value) {
        // 若已存在, 去除再插入最后一位
        if (isset($this->data[$key])) {
            unset($this->data[$key]);
        }
        $this->data[$key] = $value;
        // 超过容量淘汰不活跃的key
        if (count($this->data) > $this->capacity) {
            foreach ($this->data as $index => $datum) {
                unset($this->data[$index]);
                break;
            }
        }
        return true;
    }
}

/**
 * Your LRUCache object will be instantiated and called as such:
 * $obj = LRUCache($capacity);
 * $ret_1 = $obj->get($key);
 * $obj->put($key, $value);
 */