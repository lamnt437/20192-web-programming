<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Circle
 *
 * @author lamnt
 */
namespace general\shape;

use general\Shape as Shape;

class Circle extends Shape {
    //put your code here
    public $radius;

    function getArea() {
        return pi() * $this->radius * $this->radius;
    }
}
