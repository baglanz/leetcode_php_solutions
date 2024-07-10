Longest Subarray of 1's After Deleting One Element

Description:

Given a binary array nums, you should delete one element from it.

Return the size of the longest non-empty subarray containing only 1's in the
resulting array. Return 0 if there is no such subarray.

Example 1:
Input: nums = [1,1,0,1]
Output: 3
Explanation: After deleting the number in position 2, [1,1,1] contains 3 numbers with value of 1's.

Example 2:
Input: nums = [0,1,1,1,0,1,1,0,1]
Output: 5
Explanation: After deleting the number in position 4, [0,1,1,1,1,1,0,1] longest subarray with value of 1's is [1,1,1,1,1].

Example 3:
Input: nums = [1,1,1]
Output: 2
Explanation: You must delete one element.

<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function longestSubarray($nums) {
        $length = count($nums);
        $start = 0;
        $end = 0;
        $currentArray = 0;
        $countZero = 0;
        $maxLength = 0;
        $containsOne = false;

        foreach ($nums as $num) {
            if ($num == 1) {
                $containsOne = true;
                break;
            }
        }

        if (!$containsOne) {
            return 0;
        }

        while ($end < $length) {
            if ($nums[$end] == 0) {
                $countZero++;
            }

            while ($countZero > 1) {
                if ($nums[$start] == 0) {
                    $countZero--;
                }
                $start++;
            }

            $maxLength = max($maxLength, $end - $start);
            $end++;
        }

        return $maxLength;
    }
}
?>

See on leetcode.com: https://leetcode.com/problems/longest-subarray-of-1s-after-deleting-one-element/description
