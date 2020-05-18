<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author lamnt
 */
require_once 'model/Model.php';

class Controller {
    //put your code here
    public $model;
    
    public function __construct() {
        $this->model = new Model();
    }
    
    public function invoke() {
        if(!isset($_GET['book'])) {
//            get all books
            $books = $this->model->getBookList();
            include_once('view/booklist.php');
        } else {
//            get a specific book
            $books = $this->model->getBookList();
//            var_dump($books);
            $book_name = $_GET['book'];
//            die($book_name);
            $book = $books[$book_name];
            include_once('view/viewbook.php');
        }
    }
}
