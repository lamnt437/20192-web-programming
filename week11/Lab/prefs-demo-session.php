<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_SESSION['bg_color'])) {
    $bg = $_SESSION['bg_color'];
} else {
    $bg = '#fff';
}

if(isset($_SESSION['fg_color'])) {
    $fg = $_SESSION['fg_color'];
} else {
    $fg = '#000';
}
?>

<html>
    <head></head>
    <body bgcolor="<?= $bg ?>" text="<?= $fg ?>">
        <h1>Welcome to the store</h1>
        
        We have many fine products for you to view. Please feel free to browse the aisles and stop an assistant at any time. But remember, you break it you bought it!
        <br>Would you like to <a href="PrefSelection.html">change your preferences?</a>
        
    </body>
</html>