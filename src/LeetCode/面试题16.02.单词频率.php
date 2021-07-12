<?php

/**
 * Class WordsFrequency
 * @link https://leetcode-cn.com/problems/words-frequency-lcci/
 */
class WordsFrequency {

    /**
     * @var array $frequency
     */
    protected $frequency;

    /**
     * @param String[] $book
     */
    function __construct($book) {
        $this->frequency = [];
        foreach ($book as $item) {
            ++$this->frequency[$item];
        }
    }

    /**
     * @param String $word
     * @return Integer
     */
    function get($word) {
        return $this->frequency[$word] ?? 0;
    }
}

/**
 * Your WordsFrequency object will be instantiated and called as such:
 * $obj = WordsFrequency($book);
 * $ret_1 = $obj->get($word);
 */