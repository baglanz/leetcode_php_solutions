Max Consecutive Ones III

Description:

Given a binary array nums and an integer k, return the maximum number of consecutive
1's in the array if you can flip at most k 0's.

Example 1:
Input: nums = [1,1,1,0,0,0,1,1,1,1,0], k = 2
Output: 6
Explanation: [1,1,1,0,0,1,1,1,1,1,1]
Bolded numbers were flipped from 0 to 1. The longest subarray is underlined.

Example 2:
Input: nums = [0,0,1,1,0,0,1,1,1,0,1,1,0,0,0,1,1,1,1], k = 3
Output: 10
Explanation: [0,0,1,1,1,1,1,1,1,1,1,1,0,0,0,1,1,1,1]
Bolded numbers were flipped from 0 to 1. The longest subarray is underlined.

<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function longestOnes($nums, $k) {
        $countZero = 0;
        $left = 0;
        $maxLength = 0;

        for ($right = 0; $right < count($nums); $right++) {
            if ($nums[$right] == 0) {
                $countZero++;
            }

            while ($countZero > $k) {
                if ($nums[$left] == 0) {
                    $countZero--;
                }
                $left++;
            }

            $maxLength = max($maxLength, $right - $left + 1);
        }

        return $maxLength;
    }
}
?>

See on leetcode.com: https://leetcode.com/problems/max-consecutive-ones-iii/description
