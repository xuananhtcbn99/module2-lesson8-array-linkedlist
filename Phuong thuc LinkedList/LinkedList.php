<?php
include_once "Node.php";

class LinkedList
{
    private $firstNode;
    private $lastNode;
    private $count;

    /**
     * @param $firstNode
     * @param $lastNode
     * @param $count
     */
    public function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
        $this->count = 0;
    }

    public function addFirst($data)
    {
        $node = new Node($data);
        $node->next = $this->firstNode;
        $this->firstNode = $node;
        if (is_null($this->lastNode)) {
            $this->lastNode = $node;
        }
        $this->count++;
    }

    public function addLast($data)
    {
        if (!is_null($this->firstNode)) {
            $node = new Node($data);
            $this->lastNode->next = $node;
            $node->next = null;
            $this->lastNode = $node;
            $this->count++;
        } else {
            $this->addFirst($data);
        }
    }

    public function add($index)
    {
        
    }

    public function remove($index)
    {
        
    }

    //Truy cap 1 ptu btrong danh sach
    public function get($index)
    {
        
    }

//    Tra ve so luong cac phan tu co trong danh sach
    public function size()
    {
        return $this->count;
    }

    public function printList()
    {
        $current = $this->lastNode;
        while (!is_null($current)) {
            $current->readNode();
            $current= $current->next;
        }
    }

//    Sao chep dsach ra 1 dsach khac
    public function clone()
    {
        
    }
    
//    Kiemtra xem ptu o co trong danh sach k
    public function contains()
    {
        
    }
    
//    Tra ve vtri cua ptu o trong dsach
    public function indexOf()
    {
        
}


}
