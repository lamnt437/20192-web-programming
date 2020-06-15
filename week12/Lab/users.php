<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$id = $_GET["q"];

include_once 'config.php';
$connect = mysqli_connect($server, $user, $pass, $db);

if(!$connect) {

    die("Can't connect to db!");
}

$sql = "Select * from users where id=$id";

$results = mysqli_query($connect, $sql);

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";

while($row = mysqli_fetch_assoc($results)) {
  echo "<tr>";
  echo "<td>" . $row['UserName'] . "</td>";
  echo "<td>" . $row['Password'] . "</td>";
  echo "<td>" . $row['DisplayName'] . "</td>";
  echo "<td>" . $row['Email'] . "</td>";
  echo "<td>" . $row['PhoneNumber'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($connect);
