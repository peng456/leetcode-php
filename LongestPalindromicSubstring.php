class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
   $maxLengthQuanJu = 1;
    $maxStr = '';
    $length = strlen($s);
    if($length == 0){
        return '';
    }else{
        for($i=0;$i<$length;$i++){
            for($maxLength = $maxLengthQuanJu; $maxLength<=$length;$maxLength++)
            {
                if($maxLength%2 == 0){
                    //偶数
                    $start = $i - ($maxLength/2);
                }else{
                    //奇数
                    $start = $i - (($maxLength-1)/2);
                }
                if($start < 0){
                    break;
                }
                $end = $start+$maxLength;
                if($end>$length){
                    break;
                }
                $lsStr = substr($s,$start,$maxLength);
                if($lsStr == strrev($lsStr)){
                    $maxStr = $lsStr;
                    $maxLengthQuanJu = $maxLength;
                }else{
                    //不符合要求
                    if($maxLengthQuanJu < ($maxLength-1)){
                        break;
                    }else{
                        continue;
                    }
                }
            }
        }
    }
    return $maxStr;
   }
}
                                                          
 我的实现。写的太烂了                                                         
                                                          

class Solution {

    /**
     * @param String $s
     * @return Integer
     * 只能奇数对称。偶数对称还没有出来 
     */
    function lengthOfLongestSubstring($s) {
        $length = strlen($s);
        $key = 0;
        $max = 0;
        for($i = 0; $i < $length; $i++) {
            $tmp = 0;
            for($j=1; ($i + $j < $length) && ($i - $j >= 0);$j++) 
            {
               echo "i：".$i."j：".$j."tmp:".$key."\n";
               
            //   ji'shu奇数 
               if($s[$i + $j] != $s[$i - $j]) {
                   $key = $tmp > $max ? $i : $key;
                   $max = $tmp > $max ? $i : $max;
                   break;
               }
               
            //   偶数
            //  if($s[$i + $j - 1 ] != $s[ $i - $j ]) {
            //       $key = $tmp > $max ? $i : $key;
            //       $max = $tmp > $max ? $i : $max;
            //       break;
            //   }

                $tmp++;
                if($tmp > $max)
                {
                    $max = $tmp;
                    $key = $i;
                }
            }
        }
        
        $str = substr($s,$key - $max, 2*$max + 1);
        return $str;
        return $key ." ".$max;
    }
}

$a = new Solution();
echo $a->lengthOfLongestSubstring("fvffbffva");
die();
?>
