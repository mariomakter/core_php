<?php

abstract class Shape{

    abstract function getArea();
    abstract function getPerimetter();
}
class Rectangle extends Shape{
    private $base, $height;
    function __construct($base, $height){
        $this->base = $base;
        $this->height= $height;
    }
    public function setBase($base){
        $this->base = $base;
    }
    public function setHeight($height){
        $this->height = $height;
    }
    function getArea(){
        return $this->base*$this->height;
    }
    function getPerimetter(){}
}

class Triangle extends shape{
    function getArea(){}
    function getPerimetter(){}
}
$rc = new Rectangle(2,3);
echo $rc->getArea();