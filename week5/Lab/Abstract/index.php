<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Test_Shape
 *
 * @author lamnt
 */
require_once 'Rectangle.php';
require_once 'Triangle.php';
require_once 'Circle.php';
require_once 'Color.php';

class Test_Shape {
    //put your code here
    public static function main() {
        $my_collection = [];
    
        $r = new Rectangle();
        $r->width = 5;
        $r->height = 7;
        $my_collection[] = $r;
        unset($r);
        
        $t = new Triangle();
        $t->base = 5;
        $t->height = 7;
        $my_collection[] = $t;
        unset($t);
        
        $c = new Circle();
        $c->radius = 3;
        $my_collection[] = $c;
        unset($c);
        
        $color = new Color();
        $color->name = "blue";
        $my_collection[] = $color;
        unset($color);
        
        foreach($my_collection as $item) {
            if($item instanceof Shape) {
                echo "Area: " . $item->getArea() . "<br>";
            }
            
            if($item instanceof Polygon) {
                echo "Number of sides: " . $item->getNumberOfSides() . "<br>";
            }
            
            if($item instanceof Color) {
                echo "Color: " . $item->name . "<br>";
            }
        }
    }
}

Test_Shape::main();
