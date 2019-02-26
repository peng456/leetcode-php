
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
