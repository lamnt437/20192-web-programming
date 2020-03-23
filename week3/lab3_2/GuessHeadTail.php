<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$pick = $_POST["pick"];

$flip = rand(0, 1);

if($flip == 0) {
    echo "Flipped Head";
} else {
    echo "Flipped Tail";
}

echo "<br>";

if($flip == $pick) {
    echo "You've got it right";
} else {
    echo "You've got it wrong";
}
?>