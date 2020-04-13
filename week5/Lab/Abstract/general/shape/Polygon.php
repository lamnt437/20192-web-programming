<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Polygon
 *
 * @author lamnt
 */
//require_once 'Shape.php';

namespace general\shape;

use general\Shape as Shape;

abstract class Polygon extends Shape {
    //put your code here
    abstract function getNumberOfSides();
}
