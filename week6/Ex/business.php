<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


require_once 'config.php';

$conn = mysqli_connect($server, $user, $pass, $mydb);
if(!$conn) {
    die("Can't connect to db!");
}

// insert new business
if(isset($_POST['name'])) {
    $categories = $_POST['categories'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $telephone = $_POST['telephone'];
    $url = $_POST['url'];
    
    $sql = "INSERT INTO Businesses(BuzId, Name, Address, City, Telephone, Url) VALUES('$name', '$name', '$address', '$city', '$telephone', '$url')";
    
    if(mysqli_query($conn, $sql)) {
        $sql1 = "SELECT * FROM Businesses WHERE Name='$name'";
        $result = mysqli_query($conn, $sql1);
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        foreach($categories as $category) {
            $sql2 = "INSERT INTO Biz_Categories(BuzId, CatId) VALUES('$id', '$category')";
            if(!mysqli_query($conn, $sql2)) {
               echo "Failed to add categories to business!";
            }
        }
        echo "Successfully inserted a new Business!";
    } else {
        echo "Failed to insert a new Business!";
    }
}

// get all categories
$sql = "Select * from Categories";
    
$results = mysqli_query($conn, $sql);
    
$categories = [];
    
if(mysqli_num_rows($results) > 0) {
    while($row = mysqli_fetch_assoc($results)) {
        $categories[] = [
            'id' => $row['id'],
            'CatId' => $row['CatId'], 
            'Title' => $row['Title'], 
            'Description' => $row['Description']
        ];
    }
}
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>Business Registration</h1>
        
        <form action="business.php" method="post">
            <label for="categories[]">Categories</label>
            <select name="categories[]" multiple>
                <?php
                    foreach($categories as $category) {
                        $id = $category['id'];
                        $title = $category['Title'];
                        echo "<option value='$id'>$title</option>";
                    }
                ?>
            </select>
            
            <div>
                <label for="name">Business name</label>
                <input type="text" name="name" />
            </div>
            
            <div>
                <label for="address">Address</label>
                <input type="text" name="address" />
            </div>
            
            <div>
                <label for="city">City</label>
                <input type="text" name="city" />
            </div>
            
            <div>
                <label for="telephone">Telephone</label>
                <input type="text" name="telephone" />
            </div>
            
            <div>
                <label for="url">URL</label>
                <input type="text" name="url" />
            </div>
            
            <div>
                <input type="submit" value="Add Business" />
            </div>
        </form>
    </body>
    
</html>