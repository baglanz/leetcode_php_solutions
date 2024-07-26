Determine if Two Strings Are Close

Description:

Two strings are considered close if you can attain one from the other using the following operations:

Operation 1: Swap any two existing characters.
For example, abcde -> aecdb
Operation 2: Transform every occurrence of one existing character into another existing character,
and do the same with the other character.
For example, aacabb -> bbcbaa (all a's turn into b's, and all b's turn into a's)
You can use the operations on either string as many times as necessary.

Given two strings, word1 and word2, return true if word1 and word2 are close, and false otherwise.

Example 1:
Input: word1 = "abc", word2 = "bca"
Output: true
Explanation: You can attain word2 from word1 in 2 operations.
Apply Operation 1: "abc" -> "acb"
Apply Operation 1: "acb" -> "bca"

Example 2:
Input: word1 = "a", word2 = "aa"
Output: false
Explanation: It is impossible to attain word2 from word1, or vice versa, in any number of operations.

Example 3:
Input: word1 = "cabbba", word2 = "abbccc"
Output: true
Explanation: You can attain word2 from word1 in 3 operations.
Apply Operation 1: "cabbba" -> "caabbb"
Apply Operation 2: "caabbb" -> "baaccc"
Apply Operation 2: "baaccc" -> "abbccc"

<?php
class Solution {

    /**
     * @param String $word1
     * @param String $word2
     * @return Boolean
     */
    function closeStrings($word1, $word2) {
        if (strlen($word1) != strlen($word2)) {
            return false;
        }

        $counter1 = array_count_values(str_split($word1));
        $counter2 = array_count_values(str_split($word2));

        if (count(array_diff_key($counter1, $counter2)) > 0 || count(array_diff_key($counter2, $counter1)) > 0) {
            return false;
        }

        sort($counter1);
        sort($counter2);

        if ($counter1 != $counter2) {
            return false;
        }

        return true;
    }
}
?>

See on leetcode.com: https://leetcode.com/problems/determine-if-two-strings-are-close/description
