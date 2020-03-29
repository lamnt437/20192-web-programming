<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <div class="container">
            <h1>Generate square and cube values</h1>
            <form action="SquareCube.php" method="get">
                <div>
                    <label for="start_number">Select start number: </label>
                    <input type="number" name="start_number">
                </div>
                <div>
                    <label for="end_number">Select start number: </label>
                    <input type="number" name="end_number">
                </div>
                <div>
                    <input type="submit" value="Submit">
                </div>
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
if(isset($_GET["start_number"])) {
    if(isset($_GET["end_number"])) {
        $start_number = $_GET["start_number"];
        $end_number = $_GET["end_number"];
        
        echo "<table>";
        echo "<tr>";
        echo "<th>Number</th>";
        echo "<th>Square</th>";
        echo "<th>Cube</th>";
        echo "</tr>";
        
        for($i = $start_number; $i <= $end_number; $i++) {
            $square = $i * $i;
            $cube = $i * $i * $i;
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>$square</td>";
            echo "<td>$cube</td>";
            echo "</tr>";
        }
    }
}
