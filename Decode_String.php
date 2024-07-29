Decode String

Description:

Given an encoded string, return its decoded string.

The encoding rule is: k[encoded_string], where the encoded_string inside the square brackets is being repeated exactly k times. Note that k is guaranteed to be a positive integer.

You may assume that the input string is always valid; there are no extra white spaces, square brackets are well-formed, etc. Furthermore, you may assume that the original data does not contain any digits and that digits are only for those repeat numbers, k. For example, there will not be input like 3a or 2[4].

The test cases are generated so that the length of the output will never exceed 105.

Example 1:
Input: s = "3[a]2[bc]"
Output: "aaabcbc"

Example 2:
Input: s = "3[a2[c]]"
Output: "accaccacc"

Example 3:
Input: s = "2[abc]3[cd]ef"
Output: "abcabccdcdcdef"

<?php
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function decodeString($s) {
        $stack = [];
        $currentString = '';
        $currentNum = 0;

        for ($i = 0; $i < strlen($s); $i++) {
            $char = $s[$i];

            if (is_numeric($char)) {
                $currentNum = $currentNum * 10 + intval($char);
            } elseif ($char === '[') {
                array_push($stack, $currentString);
                array_push($stack, $currentNum);
                $currentString = '';
                $currentNum = 0;
            } elseif ($char === ']') {
                $num = array_pop($stack);
                $prevString = array_pop($stack);
                $currentString = $prevString . str_repeat($currentString, $num);
            } else {
                $currentString .= $char;
            }
        }
        return $currentString;
    }
}
?>

See on leetcode.com: https://leetcode.com/problems/decode-string/description
