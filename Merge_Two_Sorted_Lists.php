Merge Two Sorted Lists

Description:

You are given the heads of two sorted linked lists list1 and list2.

Merge the two lists into one sorted list. The list should be made by splicing together the nodes of the first two lists.

Return the head of the merged linked list.

Example 1:
Input: list1 = [1,2,4], list2 = [1,3,4]
Output: [1,1,2,3,4,4]

Example 2:
Input: list1 = [], list2 = []
Output: []

Example 3:
Input: list1 = [], list2 = [0]
Output: [0]

<?php
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists($list1, $list2) {
        $head = $list = new ListNode();
        while ($list1 !== null && $list2 !== null) {
            if ($list1->val < $list2->val) {
                $list->next = $list1;
                $list1 = $list1->next;
            } else {
                $list->next = $list2;
                $list2 = $list2->next;
            }
            $list = $list->next;
        }
        $list->next = $list1 ?: $list2;
        return $head->next;
    }
}
?>

See on leetcode.com: https://leetcode.com/problems/merge-two-sorted-lists/description
