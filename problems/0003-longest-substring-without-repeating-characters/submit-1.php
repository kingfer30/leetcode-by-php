class Solution {

    /**
    * @param String $s
    * @return Integer
    */
    function lengthOfLongestSubstring($s) {
        if (empty($s)) {
            return 0;
        }
        $box = [];
        $sort = 0;
        $ak = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            $tag = array_search($s[$i], $box);
            if ($tag !==false) {
                $b_total=count($box);
                $sort = $b_total > $sort ? $b_total : $sort;
                $box = array_slice($box, $tag + 1);
                $b_total=count($box);
                $ak= $b_total == 0 ? 0 : $b_total;
                $box[$ak] = $s[$i];
                $ak++;
            } else {
                $box[$ak] = $s[$i];
                $ak++;
            }
        }
        if (!empty($box)) {
            $b_total=count($box);
            $sort = $b_total > $sort ? $b_total : $sort;
        }
        return $sort;
    }
}