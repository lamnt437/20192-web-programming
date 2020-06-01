<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$colors = [
    "black" => "#000",
    "green" => "#0f0",
    "blue" => "#f00",
    "red" => "#00f"
];

session_start();

$bg_color = $_POST["bgcolor"];
$fg_color = $_POST["fgcolor"];

$_SESSION['bg'] = $bg_color;
$_SESSION['fg'] = $fg_color;
?>

<html>
    <head></head>
    <body>
        Thank you. Your preferences have been changed!
        <br>
        Click <a href="prefs-demo.php">here</a> to see the pref in action
    </body>
</html>
