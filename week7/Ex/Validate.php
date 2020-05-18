<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$email = $_POST['email'];
$phone = $_POST['phone'];
$url = $_POST['url'];

// validate url
if(preg_match('/[(http(s)?):\/\/(www\.)?a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&\/\/=]*)/', $url)) {
    echo "Valid url!<br>"; 
} else {
    echo "Invalid url!<br>";
}

// validate Vietnamese phone
if(preg_match('/(09|01[2|6|8|9])+([0-9]{8})\b/', $phone)) {
    echo "Valid phone number!<br>";
} else {
    echo "Invalid phone number!<br>";
}

// validate email
if(preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/', $email)) {
    echo "Valid email!<br>";
} else {
    echo "Invalid email!<br>";
}