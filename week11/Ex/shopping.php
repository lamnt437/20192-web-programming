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

include_once 'config.php';

$connect = mysqli_connect($server, $user, $pass, $db);

if(!$connect) {
    die("Can't connect to the database");
}

$sql = "Select * from products";

$results = mysqli_query($connect, $sql);

$products = [];

if(mysqli_num_rows($results) > 0) {
    while($row = mysqli_fetch_assoc($results)) {
        $product = [
            'id' => $row['id'],
            'name' => $row['name'],
            'detail' => $row['detail'],
            'price' => $row['price']
        ];
        array_push($products, $product);
    }
} else {
    echo "0 results";
}
?>

<html>
    <head></head>
    <body>
        <div>
            <h1>Choose products you want to buy!</h1>
            <form action="cart.php" method="post">
                <div>
                    <?php
                        foreach($products as $product) {
                            $id = $product['id'];
                            $name = $product['name'];
                            $price = $product['price'];
                            $detail = $product['detail'];
                            echo "<label for=\"product\">$name</label><br>";
                            echo "<input type=\"checkbox\" id=\"$id\" name=\"product[]\" value=\"$id\">";
                            echo "Detail: $detail";
                            echo "Price: $price";
                            echo "<br><hr>";
                        }
                    ?>
                </div>
                <input type="submit" value="Add to cart">
            </form>
        </div>
    </body>
</html>

