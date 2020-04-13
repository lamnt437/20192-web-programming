<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClassIntrospection
 *
 * @author lamnt
 */
function display_classes() {
    $classes = get_declared_classes( );
    
    foreach($classes as $class) {
        echo "Showing information about $class<br />";
        echo "$class methods:<br />";
        $methods = get_class_methods($class);
        if(!count($methods)) {
            echo "<i>None</i><br />";
        } else { 
            foreach($methods as $method) {
                echo "<b>$method</b>( )<br />";
            }
        }
    
        echo "$class attributes:<br />";
        $attributes = get_class_vars($class);
        if(!count($attributes)) { 
            echo "<i>None</i><br />"; 
        }
        else {
            foreach(array_keys($attributes) as $attribute) {
                echo "<b>\$attribute</b><br />";
            }
        }
        echo "<br />";
    }
}

display_classes();