<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$server = '127.0.0.1';
$user = 'root';
$pass = '123456';
$db = 'wprog_db';

$connect = mysqli_connect($server, $user, $pass, $db);

if(!$connect) {
    die("Can't connect to the database");
}

$connect = mysqli_connect($server, $user, $pass, $db);
if(isset($_POST['Product_desc'])) {
    $Product_desc = $_POST['Product_desc'];
    $Cost = $_POST['Cost'];
    $Weight = $_POST['Weight'];
    $Numb = $_POST['Numb'];
    
    $sql = "INSERT INTO Products(Product_desc, Cost, Weight, Numb) VALUES('$Product_desc', '$Cost', '$Weight', '$Numb')";
    if(mysqli_query($connect, $sql)) {
        echo "Successfully inserted!";
    } else {
        echo "Failed to insert!";
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
    
    mysqli_close($connect);
}
