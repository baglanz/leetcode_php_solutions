Move Zeroes

Description:

Given an integer array nums, move all 0's to the end of it while maintaining the relative order of the non-zero elements.

Note that you must do this in-place without making a copy of the array.

Example 1:
Input: nums = [0,1,0,3,12]
Output: [1,3,12,0,0]

Example 2:
Input: nums = [0]
Output: [0]

<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $n = count($nums);
        $lastNonZeroFoundAt = 0;

        for ($i = 0; $i < $n; $i++) {
            if ($nums[$i] != 0) {
                $nums[$lastNonZeroFoundAt++] = $nums[$i];
            }
        }

        for ($i = $lastNonZeroFoundAt; $i < $n; $i++) {
            $nums[$i] = 0;
        }
    }
}
?>

See on leetcode.com: https://leetcode.com/problems/move-zeroes/description
