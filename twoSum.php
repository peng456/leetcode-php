class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $count = count($nums);
         for($i = 0;$i < $count; $i++)
         {     
             $tmp = $nums[$i];
             for ($j = $i + 1; $j < $count; $j++)
             {
                 $sum =  $tmp + $nums[$j];
                 if ($sum == $target)
                 {
                     return array($i,$j);
                 }
             }
         }
        
        return array();
    }
}
