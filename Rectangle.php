<?php
include_once ('Resizeable.php');
class Rectangle implements Resizeable
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    function getWidth(){
        return $this->width;
    }
    function setWidth($width){
        $this->width = $width;
    }
    function getHeight(){
        return $this->height;
    }
    function setHeight($height){
        $this->height = $height;
    }
    public function getArea(){
        return $this->height * $this->width;
    }

    public function resize($doublePercent){
        $this->width += $doublePercent;
        $this->height += $doublePercent;
        echo "Rectangle resize: " . $this->getArea();
    }
}