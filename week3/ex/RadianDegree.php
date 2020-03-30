<!DOCTYPE html>

<html>
    <head></head>
    <body>
        <div class="container">
            <form action="RadianDegree.php" method="get">
                <label for="source">Source unit</label>
                <input type="radio" name="source" value=1 checked>Radian
                <input type="radio" name="source" value=2>Degree
                <br>
                
                <label for="amount">Amount</label>
                <input type="number" step="0.01" name="amount">
                
                <input type="submit" value="Submit">
            </form>
        </div>
    </body>
</html>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
define("PI", 3.14159265);

function convert($amount, $source, &$target, &$unit) {
    if($source == 1) {
        // Convert from radian to degree
        $target = ($amount / PI) * 180;
        $unit = "degree";
        return true;
    } else if($source == 2) {
        // Convert from degree to radian
        $target = ($amount / 180) * PI;
        $unit = "radian";
        return true;
    } else {
        return false;
    }
}

if(isset($_GET["source"])) {
    $source = $_GET["source"];
    $amount = $_GET["amount"];
    $target = 0;
    $unit = "nul";

    convert($amount, $source, $target, $unit);

    echo "<h1>";
    echo "Result: $target $unit";
}
?>