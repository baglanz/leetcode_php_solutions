Maximum Average Subarray I

Description:

You are given an integer array nums consisting of n elements, and an integer k.

Find a contiguous subarray whose length is equal to k that has the maximum average value
and return this value. Any answer with a calculation error less than 10-5 will be accepted.

Example 1:
Input: nums = [1,12,-5,-6,50,3], k = 4
Output: 12.75000
Explanation: Maximum average is (12 - 5 - 6 + 50) / 4 = 51 / 4 = 12.75

Example 2:
Input: nums = [5], k = 1
Output: 5.00000

<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Float
     */
    function findMaxAverage($nums, $k) {
        $sum = 0;
        for ($i = 0; $i < $k; $i++) {
            $sum += $nums[$i];
        }

        $maxSum = $sum;

        for ($i = $k; $i < count($nums); $i++) {
            $sum += $nums[$i] - $nums[$i - $k];
            if ($sum > $maxSum) {
                $maxSum = $sum;
            }
        }

        return $maxSum / $k;
    }
}
?>

See on leetcode.com: https://leetcode.com/problems/maximum-average-subarray-i/description
