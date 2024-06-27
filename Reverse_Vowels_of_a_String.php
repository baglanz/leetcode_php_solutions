Reverse Vowels of a String

Description:

Given a string s, reverse only all the vowels in the string and return it.
The vowels are 'a', 'e', 'i', 'o', and 'u', and they can appear in both lower and upper cases, more than once.

Example 1:
Input: s = "hello"
Output: "holle"

Example 2:
Input: s = "leetcode"
Output: "leotcede"

<?php
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseVowels($s) {
        $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

        $str = str_split($s);

        $vowelIndexes = [];

        for ($i = 0; $i < strlen($s); $i++) {
            if (in_array($str[$i], $vowels)) {
                $vowelIndexes[] = $i;
            }
        }

        $left = 0;
        $right = count($vowelIndexes) - 1;
        while ($left < $right) {
            $temp = $str[$vowelIndexes[$left]];
            $str[$vowelIndexes[$left]] = $str[$vowelIndexes[$right]];
            $str[$vowelIndexes[$right]] = $temp;

            $left++;
            $right--;
        }

        return implode('', $str);
    }
}
?>

See on leetcode.com: https://leetcode.com/problems/reverse-vowels-of-a-string/description
