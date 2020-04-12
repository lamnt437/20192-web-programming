<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Rectangle
 *
 * @author lamnt
 */
require_once 'Polygon.php';

class Rectangle extends Polygon {
    //put your code here
    public $height;
    public $width;
    
    function getArea() {
        return $this->height * $this->width;
    }
    
    function getNumberOfSides() {
        return 4;
    }
}
