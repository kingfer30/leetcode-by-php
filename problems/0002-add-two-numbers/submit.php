/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $carry = 0;
        $sum = $current = null;
        while ($l1 || $l2) {
            $c1 = isset($l1->val) ? $l1->val : 0;
            $c2 = isset($l2->val) ? $l2->val : 0;
            $n = ($c1 + $c2 + $carry) % 10;
            $carry = ($c1 + $c2 + $carry) >= 10 ? 1 : 0;

            if (empty($sum)) {
                $sum = new ListNode($n);
                $current = $sum;
            } else {
                $current = $current->next = new ListNode($n);
            }
            $l1=$l1->next;
            $l2=$l2->next;
        }
        if($carry > 0){
            $current->next= new ListNode($carry);
        }
        return $sum;
    }
}