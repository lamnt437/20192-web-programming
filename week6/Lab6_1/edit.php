<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'config.php';

$conn = mysqli_connect($server, $user, $pass, $mydb);

if(!$conn) {
    die("Can't connect to the database");
}

$sql = "Select * from Products";

$results = mysqli_query($conn, $sql);
$products = [];

if(mysqli_num_rows($results) > 0) {
    while($row = mysqli_fetch_assoc($results)) {
        $products[] = $row['Product_desc'];
    }
    echo "<form action='update.php' method='post'>";
    echo "<label for='product'>Choose a product</label>";
    echo "<select name='product'>";
    foreach($products as $product) {
        echo "<option value=$product>$product</option>";
    }
    echo "</select><br>";
    echo "<input type='submit' value='Click to Submit'/>";
    echo "<input type='reset' value='Reset'/>";
    echo "</form>";
} else {
    echo "Currently, we have nothing to sell!";
}