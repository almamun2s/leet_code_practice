<?php

/**
 * File: Data.php
 * Author: abdullah
 * Author URL: https://github.com/almamun2s
 * Created: 2025-09-08
 */

class Data
{
    public function index()
    {
        echo 'Hello';

        $data = [
            2145,
            null,
            'hello',
        ];
        dump($data);
    }

    public function twoSum(array $nums, int $target)
    {
        foreach ($nums as $key => $value) {
            $i = count($nums) - 1;
            while ($i > $key) {
                $result = $this->get_the_soln($key, $i, $target, $nums);
                if (is_array($result)) {
                    return $result;
                }
                $i--;
            }

        }
    }

    private function get_the_soln($key1, $key2, $target, $nums)
    {
        $currentNum = $nums[$key1];
        $postNum = $nums[$key2];
        $result = $currentNum + $postNum;
        if ($target == $result) {
            return [$key1, $key2];
        }
        return false;
    }

    /**
     * Summary of isValid
     * @param string $s
     * @return bool
     */
    public function isValid(string $s)
    {
        $arr = str_split($s);
        $stack = [];

        foreach ($arr as $key => $value) {
            if ($value == '(' || $value == '{' || $value == '[') {
                $stack[] = $value;
            } else {
                if (empty($stack)) {
                    return false;
                } elseif (end($stack) == '(' && $value != ')') {
                    return false;
                } elseif (end($stack) == '{' && $value != '}') {
                    return false;
                } elseif (end($stack) == '[' && $value != ']') {
                    return false;
                } else {
                    unset($stack[array_key_last($stack)]);
                }
            }
        }
        if (!empty($stack)) {
            return false;
        }
        return true;
    }

    // /**
    //  * @param array $list1
    //  * @param array $list2
    //  * @return array
    //  */
    // function mergeTwoLists(array $list1, array $list2)
    // {
    //     $result = array_merge($list1, $list2);

    //     sort($result);

    //     return $result;
    // }

    /**
     * Max profit calculation
     * @param array $prices
     * @return int
     */
    public function maxProfit($prices)
    {
        $min_price = 100000;
        $max_profit = 0;

        foreach ($prices as $price) {
            if ($price < $min_price) {
                $min_price = $price;
            }

            $profit = $price - $min_price;

            if ($max_profit < $profit) {
                $max_profit = $profit;
            }
        }

        return $max_profit;
    }

    /**
     * @param string $s
     * @return boolean
     */
    function isPalindrome($s)
    {
        $s = preg_replace("/[^a-zA-Z0-9]/", "", $s);
        $s = strtolower($s);
        $rev = strrev($s);
        return $s == $rev;
    }

    /**
     * @param array $nums
     * @param int $target
     * @return int
     */
    function search($nums, $target)
    {
        if (in_array($target, $nums)) {
            return array_search($target, $nums);
        }
        return -1;
    }
}