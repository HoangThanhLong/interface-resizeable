<?php
class Square implements Resizeable
{
    public $width;

    public function __construct($width)
    {
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
        $this->width += $doublePercent;
        echo "Square resize: " . $this->getArea();
    }
}