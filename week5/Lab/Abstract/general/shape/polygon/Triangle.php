<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Triangle
 *
 * @author lamnt
 */
namespace general\shape\polygon;

use general\shape\Polygon as Polygon;

class Triangle extends Polygon {
    public $base;
    public $height;

    function getArea() {
        return ($this->base * $this->height) / 2;
    }

    function getNumberOfSides() {
        return 3;
    }
}