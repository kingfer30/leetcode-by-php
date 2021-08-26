class Solution {

    /**
    * @param Integer[] $nums [2,7,11,15]
    * @param Integer $target 9
    * @return Integer[] 
    */
    function twoSum($nums, $target) {
        $map=[];
        foreach($nums as $k=>$v){
            if(isset($map[$v])){
                return [$k,$map[$v]];
            }
            $map[$target-$v]=$k;
        }
    }
    /*
    [
        7=>0,
        6=>1,

    ]
    */
}