<?php
include_once "Student.php";
include_once "LinkedList.php";

$linklist = new LinkedList();
$student1 = new Student("Xanh1", 10);
$student2 = new Student("Xanh2", 9);
$student3 = new Student("Xanh3", 8);
$student4 = new Student("Xanh4", 6);
$student5 = new Student("Xanh5", 7);

$linklist->insertFirst($student1);
$linklist->insertFirst($student2);
$linklist->insertLast($student4);
$linklist->insertFirst($student3);
echo $linklist->listStudentMaxScore();