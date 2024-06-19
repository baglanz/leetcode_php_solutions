Two Sum

Description:
Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.

You may assume that each input would have exactly one solution, and you may not use the same element twice.

You can return the answer in any order.


<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $map = [];

        foreach ($nums as $i => $num) {
            $complement = $target - $num;

            if (isset($map[$complement])) {
                return [$map[$complement], $i];
            }
            $map[$num] = $i;
        }

        return [];
    }
}
?>

See on leetcode.com: https://leetcode.com/problems/two-sum/description
