<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the te

*/
$title = $book->getTitle();
$author = $book->getAuthor();
$description = $book->getDescription();
echo "<ul>";
echo "<li>$title</li>";
echo "<li>$author</li>";
echo "<li>$description</li>";
echo "</ul>";