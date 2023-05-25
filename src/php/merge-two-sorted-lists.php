<?php

/**
 * @link       https://leetcode.com/problems/merge-two-sorted-lists/
 * @difficulty EASY
 */
class Solution
{
    /**
     * @param  ListNode|null $list1
     * @param  ListNode|null $list2
     * @return ListNode|null
     */
    public function mergeTwoLists(?ListNode $list1, ?ListNode $list2) : ?ListNode
    {
        if ($list1 === null) {
            return $list2;
        }

        if ($list2 === null) {
            return $list1;
        }

        if ($list1->val < $list2->val) {
            $list1->next = $this->mergeTwoLists($list1->next, $list2);

            return $list1;
        }

        $list2->next = $this->mergeTwoLists($list2->next, $list1);

        return $list2;
    }
}

class ListNode
{
    public function __construct(public $val = 0, public $next = null)
    {
        //
    }
}
