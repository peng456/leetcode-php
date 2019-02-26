
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $return = 0;
        $substring = '';
        
        for ($i = 0; $i < strlen($s); $i++)
        {
            $pos = strpos($substring, $s[$i]);
            if ($pos !== FALSE)
            {
                $count = strlen($substring);
                $return = $count > $return ? $count : $return;
                $substring = substr($substring, $pos + 1).$s[$i];
            }
            else
            {
                $substring .= $s[$i];
            
                if ($i == strlen($s) - 1)
                {
                    $count = strlen($substring);
                    $return = $count > $return ? $count : $return;
                }
            }
        }
        
        return $return;
   }
}

            
            class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $rerutn = 0;
        $prestr = '';
        for($i = 0 ; $i < strlen($s); $i++)
        {
            $pos = strpos($prestr,$s[$i]);
            echo $prestr;
            if($pos !== false){
                $count = strlen($prestr);
                $rerutn =  $count > $rerutn ? $count : $rerutn;
                $prestr = substr($prestr,$pos + 1).$s[$i];
            } else {
                $prestr .= $s[$i];
                if ($i == strlen($s) - 1){
                    $count = strlen($prestr);
                    $rerutn =  $count > $rerutn ? $count : $rerutn;
                }
                
            }
            
        }
        return $rerutn;
    }
}

$a = new Solution();
echo $a->lengthOfLongestSubstring("abcabcbb");
die();
