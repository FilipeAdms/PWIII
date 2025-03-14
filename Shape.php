<?php

 class Shape {
    protected $base;
    protected $heigth;

    function __set($name, $value)
    {
        $this->$name = $value;
    }
 } 

?>