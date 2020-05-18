<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Book
 *
 * @author lamnt
 */
class Book {
    //put your code here
    private $title;
    private $author;
    private $description;
    
    public function __construct($title, $author, $description) {
        $this->title = $title;
        $this->description = $description;
        $this->author = $author;
    }
    
    public function getTitle() {
        return $this->title;
    }
    
    public function getAuthor() {
        return $this->author;
        
    }
    
    public function getDescription() {
        return $this->description;
    }
}
