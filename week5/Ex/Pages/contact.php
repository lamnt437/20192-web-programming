<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'page.php';

$about = new Page("Contact", "contact page", 2020, "Wprog Corp");
$about->addHeader();
$about->addContent("This is the page content!");
$about->addFooter();