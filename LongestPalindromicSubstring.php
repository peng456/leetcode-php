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
