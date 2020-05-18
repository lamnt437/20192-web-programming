<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$date = $_POST['date'];

// day start with 0-3, end with 0-9, should be smaller than 32
$day = '[0-3][[:digit:]]';
// as my remembering
$two = '[[:digit:]]{2}';
$month = '[0-1][[:digit:]]';
$year = "2[[:digit:]]$two";

$result = preg_match("/$day\/$month\/$year/", $date);

if($result) {
    print "Valid date=$date<br>";
} else {
    print "Invalid date=$date";
}
