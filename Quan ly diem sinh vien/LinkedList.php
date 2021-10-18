<?php
include_once "Student.php";
class LinkedList
{
public $firstStudent;
public $lastStudent;
public $count;

    /**
     * @param $firstStudent
     * @param $lastStudent
     * @param $count
     */
    public function __construct()
    {
        $this->firstStudent = null;
        $this->lastStudent = null;
        $this->count = 0;
    }

    public function insertFirst($student)
    {
    if (is_null($this->firstStudent)) {
        $this->firstStudent = $student;
    } else {
        $this->firstStudent->next = $student;
        $student->next = null;
        $this->firstStudent = $student;
    }
    }

    public function insertLast($student)
    {
        if (is_null($this->lastStudent)) {
            $this->lastStudent = $student;
        } else {
            $student->next = $this->lastStudent;
            $this->lastStudent = $student;
        }
    }

    public function showList()
    {
        $current = $this->lastStudent;
        while ($current != null) {
            $current->readStudent();
            $current= $current->next;
        }
        return $current;
    }

//đếm xem trong danh sách có bao nhiêu sinh viên thi lại (điểm ≤ 5). 
    public function totalStudentsFall()
    {
        $current = $this->lastStudent;
        while ($current != null) {
            if ($current->score <= 5) {
                $this->count++;
            }
            $current = $current->next;
        }
        return $this->count;
    }

    public function listStudentMaxScore()
    {
        if (!is_null($this->lastStudent)) {
            $maxScoreStudent = $this->lastStudent;
        }
        return "StudentMaxScore: ".$maxScoreStudent->readStudent();
    }

    public function findByName($name)
    {
        $current = $this->lastStudent;
        while ($current->name === $name) {
            $current -> readStudent();
            break;
        }
        $current = $current->next;
    }

}