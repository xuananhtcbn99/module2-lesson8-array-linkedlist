<?php
include_once "Node.php";

//Tạo phương thức thêm node vào đầu Danh sách
//Mục đích: Thêm đối tượng vào vị trí đầu tiên trong danh sách
class LinkList
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

    public function insertFirst($data)
    {
// ban đầu sẽ khởi tạo một node mới :
        $node = new Node($data);

// gán node kế sau của node mới khởi tạo là node đầu tiên của linklist:
        $node->next = $this->firstNode;

// gán tiếp node đầu của danh sách là node mới khởi tạo.
        $this->firstNode = $node;

        if (is_null($this->lastNode)) {
            $this->lastNode = $node;
        }
// tăng kích thước của danh sách lên 1 đơn vị:
        $this->count++;
    }

//Tạo phương thức thêm node vào phía sau Danh sách
//Mục đích: Thêm đối tượng vào vị trí cuối cùng trong danh sách
    public function insertLast($data)
    {
// kiểm tra nếu danh sách đã tồn tại node bên trong thì sẽ khởi tạo một node mới
        if (!is_null($this->firstNode)) {
            $node = new Node($data);

//  Sau đó gán node kế tiếp phía sau của node cuối cùng hiện tại là node mới khởi tạo
            $this->lastNode->next = $node;

//   Vì là node cuối cùng nên node kế phía sau sẽ được gán giá trị NULL
            $node->next = null;

//   gán node mới khởi tạo là node cuối cùng của danh sách.
            $this->lastNode = $node;
            $this->count++;
        } else {
            $this->insertFirst($data);
        }
    }
    public function totalNodes()
    {
        return $this->count;
    }

//Tạo phương thức lấy ra số lượng node
//Mục đích: Lấy ra số lượng các node được thêm vào danh sách  
    public function readList()
    {
        $listData = [];
        $current = $this->firstNode;

        while (!is_null($current)) {
            array_push($listData, $current->readNode());
            $current = $current->next;
        } return $listData;
    }

}
