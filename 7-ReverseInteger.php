class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {        
        $pre = 0;
        while($x){
            $tmp = $x % 10 ;
            $x = (int)($x / 10);
            $pre = $pre*10 + $tmp;
        }
        
        if ( $pre < -2147483648 || $pre > 2147483647)
        {
            return 0;
        }
        
        return $pre;
    }
     
}
