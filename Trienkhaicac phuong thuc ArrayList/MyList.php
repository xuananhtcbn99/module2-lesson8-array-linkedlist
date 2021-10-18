<?php

class MyList
{
    public $elements;

    public function __construct($arr = "")
    {
        if (is_array($arr)) {
            $this->elements = $arr;
        } else {
            $this->elements = [];
        }
    }

    public function insert($index, $obj)
    {
        array_splice($this->elements, $index, 0, $obj);
    }

    public function add($obj)
    {
        array_push($this->elements,$obj);
    }

    public function remove($index)
    {
        if ($this->isInteger($index)) {
            $newArrayList = [];
            for ($i = 0; $i < $this->size(); $i++) {
                if ($index != $i) $newArrayList[] = $this->get($i);
            }
            $this->elements = $newArrayList;
        } else {
            die("ERROR in ArrayList.remove <br> Integer value required");
        }
    }

    public function isInteger($toCheck)
    {
        return preg_match("/^[0-9]+$/", $toCheck);
    }

    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->elements[$index];
        }    else {
            die("ERROR in ArrayList.get");
        }
    }

    public function clear()
    {
        $this->elements = [];
    }

    public function addAll($arr)
    {

    }

    public function indexOf($obj)
    {
        return array_search($obj, $this->elements);
    }

    public function sort()
    {
        sort($this->elements);
    }

    public function reset()
    {
        reset($this->elements);
    }
    public function size()
    {
        return count($this->elements);
    }

}