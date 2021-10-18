<?php
class ArrayList
{
    public $arrayLish; //array|string

    public function __construct($arr = "")
    {
        if (is_array($arr)) {
            $this->arrayLish = $arr;
        }else {
            $this->arrayLish= [];
        }
    }

    /**
     * Thêm một phần tử vào cuối danh sách này.
     * @param $obj
     **/
    public function add($obj)
    {
        array_push($this->arrayLish, $obj);
    }

//Phuong thuc get tra ve ptu o vtri i trong danh sach
//Tham so dau vao:so nguyen chua vtri can truy cap den ptu trg dsach
    public function get($index)
    {
        if ($this->isInteger($index) && $index<$this->size()) {
            return $this->arrayLish[$index];
        } else {
            die("ERROR in ArrayList.get");
        }
    }

    /**
     * Trả về true nếu tham số chứa một giá trị số nguyên
     * @param $toCheck
     * @return boolean
     */
    public function isInteger($toCheck)
    {
        return preg_match("/^[0-9]+$/",$toCheck);
    }

    public function size()
    {
        return count($this->arrayLish);
    }
}