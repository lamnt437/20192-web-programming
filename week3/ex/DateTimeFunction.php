<!DOCTYPE html>
<html>
    <head>
        <style>
            body {
                font-family: Helvetica;
            }
        </style>
    </head>
    <body>
        <form action="DateTimeFunction.php" method="post">
            <div>
                <label>Name 1</label>
                <input type="text" name="name1">
            </div>

            <div>
                <label>Birthday 1</label>
                <input type="date" name="birth1">
            </div>

            <div>
                <label>Name 2</label>
                <input type="text" name="name2">
            </div>

            <div>
                <label>Birthday 2</label>
                <input type="date" name="birth2">
            </div>

            <div>
                <input type="submit" value="Submit">
            </div>
        </form>
    </body>
</html>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function validate_birthday($date, $format = "Y-m-d") {
    $d = DateTime::createFromFormat($format, $date);
    return $d->format($format) === $date;
}

function date_in_letters($date, $format) {
    $date_obj = DateTime::createFromFormat($format, $date);
    return $date_obj->format("l, jS F Y");
}

function difference_in_day($date1, $date2, $format) {
    $date1_obj = DateTime::createFromFormat($format, $date1);
    $date2_obj = DateTime::createFromFormat($format, $date2);
    return $date1_obj->diff($date2_obj)->days;
}

function difference_in_year($date1, $date2, $format) {
    $date1_obj = DateTime::createFromFormat($format, $date1);
    $date2_obj = DateTime::createFromFormat($format, $date2);
    return $date1_obj->diff($date2_obj)->y;
}

function get_age($date, $format) {
    $d = DateTime::createFromFormat($format, $date);
    $now = new DateTime();
    
    return $now->diff($d)->y;
}

if(isset($_POST["name1"])
    && isset($_POST["birth1"])
    && isset($_POST["name2"])
    && isset($_POST["birth2"]))
{
    $name1 = $_POST["name1"];
    $birth1 = $_POST["birth1"];
    $name2 = $_POST["name2"];
    $birth2 = $_POST["birth2"];
    
    $format = "Y-m-d";
    
    if(validate_birthday($birth1)) {
        // display
        echo "<h1>";
        echo $name1;
        echo "</h1>";
        
        echo "<h3>";
        echo date_in_letters($birth1, $format);
        echo "</h3>";
        
        echo "<h3>";
        $age1 = get_age($birth1, $format);
        echo "Age: $age1";
        echo "</h3>"; 
        
        if(validate_birthday($birth2, $format)) {
            // display
            echo "<h1>";
            echo $name2;
            echo "</h1>";

            echo "<h3>";
            echo date_in_letters($birth2, $format);
            echo "</h3>";
            
            echo "<h3>";
            $age2 = get_age($birth2, $format);
            echo "Age: $age2";
            echo "</h3>";
            
            echo "<h3>";
            echo "Difference in days: ";
            echo difference_in_day($birth1, $birth2, $format);
            
            echo "<h3>";
            echo "Difference in years: ";
            echo difference_in_year($birth1, $birth2, $format);
            echo "</h3>";
        }    
    }
}
    