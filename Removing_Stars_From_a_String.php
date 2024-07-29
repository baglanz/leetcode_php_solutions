Removing Stars From a String

Description:

You are given a string s, which contains stars *.

In one operation, you can:

Choose a star in s.
Remove the closest non-star character to its left, as well as remove the star itself.
Return the string after all stars have been removed.

Note:

The input will be generated such that the operation is always possible.
It can be shown that the resulting string will always be unique.

Example 1:
Input: s = "leet**cod*e"
Output: "lecoe"
Explanation: Performing the removals from left to right:
- The closest character to the 1st star is 't' in "leet**cod*e". s becomes "lee*cod*e".
- The closest character to the 2nd star is 'e' in "lee*cod*e". s becomes "lecod*e".
- The closest character to the 3rd star is 'd' in "lecod*e". s becomes "lecoe".
There are no more stars, so we return "lecoe".

Example 2:
Input: s = "erase*****"
Output: ""
Explanation: The entire string is removed, so we return an empty string.

<?php
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function removeStars($s) {
        $stack = [];

        for ($i = 0; $i < strlen($s); $i++) {
            if ($s[$i] == '*') {
                array_pop($stack);
            } else {
                $stack[] = $s[$i];
            }
        }

        return implode('', $stack);
    }
}
?>

See on leetcode.com: https://leetcode.com/problems/removing-stars-from-a-string/description