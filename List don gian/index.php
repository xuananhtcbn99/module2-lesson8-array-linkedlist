<?php
include_once "ArrayList2.php";

$listInteger = new ArrayList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);

echo $listInteger->get(0);
//echo $listInteger->get(-1);