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
}