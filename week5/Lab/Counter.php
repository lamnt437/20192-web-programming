<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Counter {
    private static $count = 0;
    const VERSION = 2.0;
    
    function __construct() {
        self::$count++;
    }
    
    function __destruct() {
        self::$count--;
    }
    
    function getCounter() {
        return self::$count;
    }
}

$c1 = new Counter();
echo "Counter: " . $c1->getCounter();
$c2 = new Counter();
echo "Counter: " . $c2->getCounter();
$c2 = NULL;

echo "Counter: " . $c1->getCounter();
