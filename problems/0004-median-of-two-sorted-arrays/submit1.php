/*
 * @lc app=leetcode.cn id=4 lang=php
 *
 * [4] 寻找两个正序数组的中位数
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $arr=array_merge($nums1,$nums2);
        sort($arr);
        $count=count($arr);
        if($count == 1){
            return $arr[0];
        }
        $res=0;
        $mid=0;
        if($count % 2 == 0){
            $mid = ((int)$count / 2) - 1;
            $res = ($arr[$mid] + $arr[$mid + 1]) / 2;
        } else {
            $res = $arr[ceil($count / 2)-1];
        }
        return $res;
    }
}
// @lc code=end

