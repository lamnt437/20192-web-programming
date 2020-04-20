<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'config.php';

$conn = mysqli_connect($server, $user, $pass, $mydb);
if(!$conn) {
    die("Error connecting to the database!");
}

$table = 'Products';

if(isset($_POST['name'])) {
    $name = $_POST['name'];
    
    $sql = "Select * from $table where Product_desc='$name'";
//    echo $sql;
    $results = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($results) > 0) {
        while($row = mysqli_fetch_assoc($results)) {
            echo "Product description: " . $row['Product_desc'] . '<br>';
            echo "Product cost: " . $row['Cost'] . '<br>';
            echo "Product weight: " . $row['Weight'] . '<br>';
            echo "Product number: " . $row['Numb'] . '<br><br>';
        }
    } else {
        echo '0 results';
    }
}