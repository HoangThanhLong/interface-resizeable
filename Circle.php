<?php
include_once ('Resizeable.php');
include_once ('Shape.php');

class Circle extends Shape implements Resizeable
{
    public $radius;
    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    function getRadius(){
        return $this->radius;
    }
    function setRadius($radius){
        $this->radius = $radius;
    }

    public function calculateArea(){
        return pi() * pow($this->radius, 2);
    }

    public function resize($doublePercent){
        return $this->calculateArea() + ($this->calculateArea() * $doublePercent / 100);
    }
}