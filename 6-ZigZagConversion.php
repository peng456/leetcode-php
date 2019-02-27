对角线展示字符串数组  
这是啥题呀。这么怪。

实现并不优雅。。。。。。。

class Solution {

    /**
     * @param String $s
     * @param Integer $numRows
     * @return String
     */
    function convert($s, $numRows) {
        $length =  strlen($s);
        $row = 0;
        $column = 0;
        $flag = 0; // 0 直下降 1 斜上升
        $tmp = array();
        $i = 0;
        while($i < $length){
            $tmp[$row][$column] = $s[$i];
            $i++;
            if($flag == 1)
            {
                $row--;
            } else {
               $row++;
            }
                           
            if($flag != 0){
                $column++;
            } 
            
            if($row == 0  ||  $row == ($numRows -1))
            {
                $flag = $flag ? 0 : 1 ;
            }
            
        }
     
        $str = '';
        foreach ($tmp as $value)
        {
            $str .= implode("",$value);
        }
        return $str;
    }
}
