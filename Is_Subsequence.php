Is Subsequence

Description:
Given two strings s and t, return true if s is a subsequence of t, or false otherwise.

A subsequence of a string is a new string that is formed from the original string by deleting some (can be none) of the characters without disturbing the relative positions of the remaining characters. (i.e., "ace" is a subsequence of "abcde" while "aec" is not).

Example 1:
Input: s = "abc", t = "ahbgdc"
Output: true

Example 2:
Input: s = "axc", t = "ahbgdc"
Output: false

<?php
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isSubsequence($s, $t) {
        $s_length = strlen($s);
        $t_length = strlen($t);

        $i = 0;
        $j = 0;

        while ($i < $s_length && $j < $t_length) {
            if ($s[$i] == $t[$j]) {
                $i++;
            }
            $j++;
        }

        return $i == $s_length;
    }
}
?>

See on leetcode.com: https://leetcode.com/problems/is-subsequence/description
