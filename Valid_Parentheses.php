Valid Parentheses

Description:

Given a string s containing just the characters '(', ')', '{', '}', '[' and ']',
determine if the input string is valid.

An input string is valid if:

Open brackets must be closed by the same type of brackets.
Open brackets must be closed in the correct order.
Every close bracket has a corresponding open bracket of the same type.


Example 1:

Input: s = "()"
Output: true
Example 2:

Input: s = "()[]{}"
Output: true
Example 3:

Input: s = "(]"
Output: false


Constraints:

1 <= s.length <= 104
s consists of parentheses only '()[]{}'.

<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $stack = [];
        $map = ['(' => ')', '{' => '}', '[' => ']'];
        foreach (str_split($s) as $char) {
            if (isset($map[$char])) {
                $stack[] = $char;
            } else if (empty($stack) || $map[$stack[count($stack) - 1]] !== $char) {
                return false;
            } else {
                array_pop($stack);
            }
        }
        return empty($stack);
    }
}
?>

See on leetcode.com: https://leetcode.com/problems/valid-parentheses/description/
