<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// get all businesses
require_once 'config.php';

$conn = mysqli_connect($server, $user, $pass, $mydb);
if(!$conn) {
    die("Can't connect to db!");
}

$businesses = [];
$categories = [];


if(isset($_GET['cat_id'])) {
    $cat_id = $_GET['cat_id'];
    $sql = "SELECT * FROM Biz_Categories WHERE CatId='$cat_id'";
    $result = mysqli_query($conn, $sql);
    $biz_ids = [];
    while($row = mysqli_fetch_assoc($result)) {
        $biz_ids[] = $row['BuzId'];
    }
    foreach($biz_ids as $biz_id) {
        $biz_sql = "Select * from Businesses Where id='$biz_id'";
        $biz_result = mysqli_query($conn, $biz_sql);
        while($biz_row = mysqli_fetch_assoc($biz_result)) {
            $businesses[] = [
                'id' => $biz_row['id'],
                'name' => $biz_row['Name'],
                'address' => $biz_row['Address'],
                'city' => $biz_row['City'],
                'telephone' => $biz_row['Telephone'],
                'url' => $biz_row['Url']
            ];
        }
    }
} else {
    $sql = "Select * from Businesses";
    $result = mysqli_query($conn, $sql);
    

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $businesses[] = [
                'id' => $row['id'],
                'name' => $row['Name'],
                'address' => $row['Address'],
                'city' => $row['City'],
                'telephone' => $row['Telephone'],
                'url' => $row['Url']
            ];
        }
    }
}
// get all categories

$sql = "Select * from Categories";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $categories[] = [
            'id' => $row['id'],
            'CatId' => $row['CatId'],
            'Title' => $row['Title'],
            'Description' => $row['Description'],
        ];
    }
}
// display
?>
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>Category Administration</h1>
        <div>
            <ul>
                <?php
                    foreach($categories as $category) {
                        $id = $category['id'];
                        $name = $category['Title'];
                        echo "<li><a href='http://localhost:8000/week6/Ex/biz_listing.php?cat_id=$id'>$name</a></li>";
                    }
                ?>
            </ul>
        </div>
        <div>
                <table>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Address
                        </th>
                        <th>
                            Telephone
                        </th>
                        <th>
                            Url
                        </th>
                    </tr>

                    <?php
                        foreach($businesses as $business) {
                            $id = $business['id'];
                            $name = $business['name'];
                            $address = $business['address'];
                            $telephone = $business['telephone'];
                            $url = $business['url'];

                            echo "<tr>";
                            echo "<td>$id</td>";
                            echo "<td>$name</td>";
                            echo "<td>$address</td>";
                            echo "<td>$telephone</td>";
                            echo "<td>$url</td>";
                            echo "</tr>";
                        }
                    ?>
                </table>
        </div>
    </body>
</html>