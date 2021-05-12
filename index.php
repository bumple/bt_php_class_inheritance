<?php
include_once 'Circle.php';
include_once 'Cylinder.php';

$circle = new Circle('hinh tron',3,'xanh');
$cylinder = new Cylinder('hinh tru',4,'do',3);

echo 'dien tich '.$cylinder->name.' : '.$cylinder->toString($cylinder->calculateArea()).'<br>';
echo 'dien tich '.$circle->name.' : '.$circle->toString($circle->calculateArea()).'<br>';
echo 'chu vi '.$circle->name.' : '.$circle->toString($circle->calculateArea()).'<br>';
echo 'chu vi '.$cylinder->name.' : '.$cylinder->toString($cylinder->calculatePerimeter()).'<br>';

