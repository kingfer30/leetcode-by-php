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
        
        $count1 = count($nums1);
        $count2 = count($nums2);

        $mid = 0;
        $result = 0;

        $all = [];
        //合并操作
        for ($i = 0, $j = 0; $i < $count1 && $j < $count2;) {
            if ($nums1[$i] < $nums2[$j]) {
                $all[] = $nums1[$i++];
            } else {
                $all[] = $nums2[$j++];
            }
        }

        while ($i < $count1) {
            $all[] = $nums1[$i++];
        }

        while ($j < $count2) {
            $all[] = $nums2[$j++];
        }
        
        //总数
        $all_count = $count1 + $count2;
        //判断总数是否为奇数
        $is_odd = ($all_count) % 2 != 0;
    
        //取中位数
        $mid = ceil(($all_count) / 2);

        if ($is_odd) {
            //如果是奇数则取一个返回即可
            $result = $all[$mid - 1];
        } else {
            //如果是偶数则取2个的平均数
            $result = ($all[$mid - 1] + $all[$mid]) / 2;
        }

        return $result;
    }
}
// @lc code=end

