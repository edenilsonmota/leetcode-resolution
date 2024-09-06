<?php


/**
 * 
Example 1:

Input: nums = [1,1,0,1,1,1]
Output: 3
Explanation: The first two digits or the last three digits are consecutive 1s. The maximum number of consecutive 1s is 3.

Example 2:
Input: nums = [1,0,1,1,0,1]
Output: 2
 */

 class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findMaxConsecutiveOnes($nums) {
        $sequence = 0;
        $sequenceCurrent = 0;
        
        for($i = 0; $i < count($nums); $i++){
            if($nums[$i] == 1){
                $sequenceCurrent++;
                
                if($sequenceCurrent >= $sequence){
                    $sequence = $sequenceCurrent;
                }
            }else{
                $sequenceCurrent = 0;
            }
        }
        
        return $sequence;
        
    }
} 