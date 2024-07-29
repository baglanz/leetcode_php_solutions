Equal Row and Column Pairs

Description:

Given a 0-indexed n x n integer matrix grid, return the number of pairs (ri, cj) such that row ri and column cj are equal.

A row and column pair is considered equal if they contain the same elements in the same order (i.e., an equal array).

Example 1:
Input: grid = [[3,2,1],[1,7,6],[2,7,7]]
Output: 1
Explanation: There is 1 equal row and column pair:
- (Row 2, Column 1): [2,7,7]

Example 2:
Input: grid = [[3,1,2,2],[1,4,4,5],[2,4,2,2],[2,4,2,2]]
Output: 3
Explanation: There are 3 equal row and column pairs:
- (Row 0, Column 0): [3,1,2,2]
- (Row 2, Column 2): [2,4,2,2]
- (Row 3, Column 2): [2,4,2,2]

<?php
class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function equalPairs($grid) {
        $count = count($grid);
        $rowCount = [];
        $colCount = [];

        for ($i = 0; $i < $count; $i++) {
            $row = implode(',', $grid[$i]);
            if (!isset($rowCount[$row])) {
                $rowCount[$row] = 0;
            }
            $rowCount[$row]++;
        }

        for ($j = 0; $j < $count; $j++) {
            $col = [];
            for ($i = 0; $i < $count; $i++) {
                $col[] = $grid[$i][$j];
            }
            $colStr = implode(',', $col);
            if (!isset($colCount[$colStr])) {
                $colCount[$colStr] = 0;
            }
            $colCount[$colStr]++;
        }

        $result = 0;
        foreach ($rowCount as $row => $rowCountValue) {
            if (isset($colCount[$row])) {
                $result += $rowCountValue * $colCount[$row];
            }
        }

        return $result;
    }
}
?>

See on leetcode.com: https://leetcode.com/problems/equal-row-and-column-pairs/description
