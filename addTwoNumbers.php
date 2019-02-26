/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */

class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $LN = new ListNode(0);
        
        $current = $LN;
        
        $a = &$l1;
        $b = &$l2;
        
        $c = 0;
        
        while($a || $b){
            $x = $a->val;
            $y = $b->val; 
            $sum = $x + $y + $c;
        
            $current->next = new ListNode($sum < 10 ? $sum : $sum - 10);            
            $c = $sum < 10 ? 0 : 1 ;

            $a = $a->next;
            $b = $b->next;
            $current = $current->next;    
        }

        if($c > 0){
            $current->next = new ListNode($c);
        }
        
        return $LN->next;
           
    }
}
