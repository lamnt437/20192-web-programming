<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// must contain any of char in the group
$result = preg_match('/[2-9]/', "Hello world1");

// order matters
// but only need this pattern exists
$result1 = preg_match('/[A-Z][a-z]/', "EEh");
// to require starting with this pattern
// this becomes wrong
$result2 = preg_match('/^[A-Z][a-z]/', "EEh");

echo $result2;