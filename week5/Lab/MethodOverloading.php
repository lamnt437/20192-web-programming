<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MethodOverloading
 *
 * @author lamnt
 */
class MethodTest {
    //put your code here
    function __call($name, $arguments) {
        echo "Calling method $name " . implode(', ', $arguments) . "<br>";
    }
    
    public static function __callStatic($name, $arguments) {
        echo "Calling static method $name " . implode(', ', $arguments) . "<br>";
    }
}

$obj = new MethodTest();
$obj->testMethod();
MethodTest::testStaticMethod();