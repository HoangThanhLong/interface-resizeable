<?php
include_once('Circle.php');
include_once('Rectangle.php');
include_once('Square.php');

$circle = new Circle(5);
$doublePercent = rand(1, 100);
$circle->resize($doublePercent);
echo "<br>";

$rectangle = new Rectangle(11,20);
$doublePercent = rand(1, 100);
$rectangle->resize($doublePercent);
echo "<br>";

$square = new Square(6);
$doublePercent = rand(1, 100);
$square->resize($doublePercent);
echo "<br>";