<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'config.php';

if(isset($_POST['product'])) {
    $conn = mysqli_connect($server, $user, $pass, $mydb);

    if(!$conn) {
        die("Can't connect to the database");
    }
    
    $product = $_POST['product'];
    $sql = "Select * from Products where Product_desc='$product'";
    $results = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($results) > 0) {
        $row = mysqli_fetch_assoc($results);
        if($row['Numb'] <= 0) {
            die("Out of stock!");
        }
        
        $update_sql = "Update Products Set Numb = Numb-1 Where Product_desc='$product'";
        $update_result = mysqli_query($conn, $update_sql);
        
        if($update_result) {
            echo "Record updated!";
        } else {
            echo "Failed to update!";
        }
    } else {
        die("Product not found!");
    }
    
}