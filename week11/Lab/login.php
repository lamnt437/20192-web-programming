<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'config.php';

$connect = mysqli_connect($server, $user, $pass, $db);

if(!$connect) {
    die("Can't connect to the database");
}

if(isset($_POST['UserName']) && isset($_POST['Password'])) {
    $username = $_POST['UserName'];
    $password = $_POST['Password'];
    
//    $sql = "INSERT INTO Products(Product_desc, Cost, Weight, Numb) VALUES('$Product_desc', '$Cost', '$Weight', '$Numb')";
    $sql = "SELECT * FROM Users WHERE UserName = '$username' AND Password = '$password'";
    $results = mysqli_query($connect, $sql);
    
    if(mysqli_num_rows($results) == 1) {
        // set up sessino
        session_start();
//        session_register($username);
        $_SESSION['username'] = $username;
        // redirect to the main page
        echo "<h1>Welcome to the Page, $username!</h1>";
    } else if (mysqli_num_rows($results) > 1) {
        echo "<h1>Internal Database error!</h1>";
    } else {
        echo "<h1>Login failed! No record in the database!</h1>";
    }
    
    mysqli_close($connect);
}