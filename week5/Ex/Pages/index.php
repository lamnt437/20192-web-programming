<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'page.php';

$page = "Hello, world!";
$home = new Page($page, "home page", 2020, "Wprog Corp");
$home->addHeader();
$home->addContent("This is the page content!");
$home->addFooter();