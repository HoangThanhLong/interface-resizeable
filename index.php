<?php
include_once('Circle.php');
include_once('Rectangle.php');
include_once('Square.php');

$circle = new Circle('Circle', 5);
$doublePercent = rand(1,100);
echo "Circle: " . $circle->resize($doublePercent) . '<br>';

$rectangle = new Rectangle('Rectangle', 5,6);
echo 'Rectangle: ' . $rectangle->resize($doublePercent) . '<br>';

$square = new Square('Square', 5);
echo 'Square: ' . $square->resize($doublePercent) . '<br>';