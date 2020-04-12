<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ObjectCloning
 *
 * @author lamnt
 */
class ObjectTracker {
    private static $nextSerial = 0;
    private $name, $id;
    
    function __construct($name) {
        $this->name = $name;
        $this->id = ++self::$nextSerial;
    }
    
    function __destruct() {
        --self::$nextSerial;
    }
    
    function __clone() {
        $this->name = "Clone of $this->name";
        $this->id = ++self::$nextSerial;
    }
    
    function getId() {
        return $this->id;
    }
    
    function getName() {
        return $this->name;
    }
    
    function setName($name) {
        $this->name = $name;
    }
}

$ot = new ObjectTracker("Zeev's object");
$ot2 = clone $ot;
$ot2->setName("Another object");
echo $ot->getId() . " " . $ot->getName() . "<br>";
echo $ot2->getId() . " " . $ot2->getName() . "<br>";
