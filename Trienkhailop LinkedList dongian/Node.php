<?php
//Lớp Node chứa thông tin về một node trong danh sách liên kết.
class Node
{
public $data;
public $next;

    /**
     * @param $data
     * @param $next
     */
    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
    function readNode() {
        return $this->data;
    }


}