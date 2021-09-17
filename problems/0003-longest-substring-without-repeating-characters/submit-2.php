class Solution {

    /**
    * @param String $s
    * @return Integer
    */
    function lengthOfLongestSubstring($s) {
        if (empty($s)) {
            return 0;
        }
        if (empty($s)) {
            return 0;
        }
        $start = 0;
        $count = 0;
        $arr = [];
        for ($i = 0; $i < strlen($s); $i++) {
            $start = max($start, $arr[ord($s[$i])]);
            $count = max($count, ($i + 1) - $start);
            $arr[ord($s[$i])] = ($i + 1);
        }

        return $count;
    }
}