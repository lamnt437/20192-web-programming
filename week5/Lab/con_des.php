<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class BaseClass {
    protected $name = "BaseClass";
    
    public function __construct() {
        echo "<h1>" . $this->name . " construct</h1>";
    }
    
    public function __destruct() {
        echo "<h1>" . $this->name . " distruct</h1>";
    }
}

class SubClass extends BaseClass {
    
    
    function __construct() {
        $this->name = "SubClass";
        parent::__construct();
    }
    
    function __destruct() {
        parent::__destruct();
    }
}

$obj1 = new BaseClass();
$obj2 = new SubClass();