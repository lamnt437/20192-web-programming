<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(!isset($_SESSION['username'])) {
//    echo "You must <a href='/week11/Ex/login.html>log in</a> first!";
    header('/week11/Ex/login.html');
}

session_start();

if(isset($_POST['product'])) {
    $products = $_POST['product'];
    
    $_SESSION['products'] = $products;
}

if(isset($_SESSION['products'])) {
    $products = $_SESSION['products'];
    
    include_once 'config.php';
    $connect = mysqli_connect($server, $user, $pass, $db);

    if(!$connect) {
        die("Can't connect to the database");
    }
    
    foreach($products as $product) {
        $id = $product;
        $sql = "Select * from products where id=$id";
        $results = mysqli_query($connect, $sql);
        if(mysqli_num_rows($results) > 0) {
            while($row = mysqli_fetch_assoc($results)) {
                $name = $row['name'];
                echo $name . "<br>";
            }
        } else {
            echo "0 results";
        }
    }
} else {
    echo "Your cart is empty";
}