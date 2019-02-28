// 这个实现很鸡贼。哈哈。

class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        if ( $x < 0 ) {
            return false;
        }
         
        $str =  (string)$x;  
        if ($str == strrev($str)){
            return true;
        }    
        return false;    
    }
}
