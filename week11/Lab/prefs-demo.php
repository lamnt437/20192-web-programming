<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$bg = $_COOKIE['bg_color'];
$fg = $_COOKIE['bg_color'];
?>

<html>
    <head></head>
    <body bgcolor="<?= $bg ?>" text="<?= $fg ?>">
        <h1>Welcome to the store</h1>
        
        We have many fine products for you to view. Please feel free to browse the aisles and stop an assistant at any time. But remember, you break it you bought it!
        <br>Would you like to <a href="PrefSelection.html">change your preferences?</a>
        
    </body>
</html>