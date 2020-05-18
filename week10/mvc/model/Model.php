<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model
 *
 * @author lamnt
 */
require_once('model/Book.php');

class Model {
    //put your code here
    public function getBookList() {
        $books = [
            "Hello" => new Book("Hello, world", "Unknown", "I'm fine thank you!"),
            "Foo" => new Book("Foo", "Bar", "Description for FooBar"),
           ];
        
        return $books;
    }
}
