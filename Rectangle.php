<?php 
include ("Shape.php");

class Rectangle extends Shape {
    function getPoligonArea(){
        return $this->base * $this->heigth;
    }
}


$rectangle = new Rectangle();
$rectangle->base = 2;
