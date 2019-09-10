<?php
include_once ('Resizeable.php');

class Circle implements Resizeable
{
    public $radius;

    public function __construct($radius)
    {
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
        $this->radius += $doublePercent;
        echo "Radius resize: " . $this->calculateArea();
    }
}