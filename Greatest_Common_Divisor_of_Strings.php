Greatest Common Divisor of Strings

Description:

For two strings s and t, we say "t divides s" if and only if s = t + t + t + ... + t + t
(i.e., t is concatenated with itself one or more times).

Given two strings str1 and str2, return the largest string x such that x divides both str1 and str2.

Example 1:
Input: str1 = "ABCABC", str2 = "ABC"
Output: "ABC"

Example 2:
Input: str1 = "ABABAB", str2 = "ABAB"
Output: "AB"

Example 3:
Input: str1 = "LEET", str2 = "CODE"
Output: ""

<?php
class Solution {

    /**
     * @param String $str1
     * @param String $str2
     * @return String
     */
    function gcdOfStrings($str1, $str2) {
        if ($str1 . $str2 !== $str2 . $str1) {
            return "";
        }

        $gcd = function($a, $b) use (&$gcd) {
            return $b == 0 ? $a : $gcd($b, $a % $b);
        };

        $len1 = strlen($str1);
        $len2 = strlen($str2);
        $gcdLength = $gcd($len1, $len2);

        return substr($str1, 0, $gcdLength);
    }
}
?>

See on leetcode.com: https://leetcode.com/problems/greatest-common-divisor-of-strings/description
