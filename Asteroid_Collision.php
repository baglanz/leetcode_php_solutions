Asteroid Collision

Description:

We are given an array asteroids of integers representing asteroids in a row.

For each asteroid, the absolute value represents its size, and the sign represents its direction
(positive meaning right, negative meaning left). Each asteroid moves at the same speed.

Find out the state of the asteroids after all collisions. If two asteroids meet, the smaller one will explode.
If both are the same size, both will explode. Two asteroids moving in the same direction will never meet.

Example 1:
Input: asteroids = [5,10,-5]
Output: [5,10]
Explanation: The 10 and -5 collide resulting in 10. The 5 and 10 never collide.

Example 2:
Input: asteroids = [8,-8]
Output: []
Explanation: The 8 and -8 collide exploding each other.

Example 3:
Input: asteroids = [10,2,-5]
Output: [10]
Explanation: The 2 and -5 collide resulting in -5. The 10 and -5 collide resulting in 10.

<?php
class Solution {

    /**
     * @param Integer[] $asteroids
     * @return Integer[]
     */
    function asteroidCollision($asteroids) {
        $stk = [];
        foreach ($asteroids as $x) {
            if ($x > 0) {
                array_push($stk, $x);
            } else {
                while (!empty($stk) && end($stk) > 0 && end($stk) < -$x) {
                    array_pop($stk);
                }
                if (!empty($stk) && end($stk) == -$x) {
                    array_pop($stk);
                } elseif (empty($stk) || end($stk) < 0) {
                    array_push($stk, $x);
                }
            }
        }
        return $stk;
    }
}
?>

See on leetcode.com: https://leetcode.com/problems/asteroid-collision/description
