<?php
include_once ('Resizeable.php');
include_once ('Shape.php');
class Square extends Shape implements Resizeable
{
    public $width;

    public function __construct($name, $width)
    {
        parent::__construct($name);
        $this->width = $width;
    }

    function getWidth(){
        return $this->width;
    }
    function setWidth($width){
        $this->width = $width;
    }
    function getArea(){
        return $this->width * $this->width;
    }
    function resize($doublePercent)
    {
        return $this->getArea() + ($this->getArea() * $doublePercent / 100);
    }
}