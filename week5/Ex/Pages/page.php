<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of page
 *
 * @author lamnt
 */
class Page {
    //put your code here]
    protected $page;
    protected $title;
    protected $year;
    protected $copyright;
    
    function __construct($page, $title, $year, $copyright) {
        $this->page = $page;
        $this->title = $title;
        $this->year = $year;
        $this->copyright = $copyright;
    }
    
    public function addHeader() {
        echo "Title: " . $this->title . "<br>";
    }
    
    public function addContent($content) {
        echo "Page: " . $this->page . "<br>";
        echo "Content: " . $content . "<br>";
    }
    
    public function addFooter() {
        echo "Footer: " . $this->copyright . " " . $this->year . "<br>";
    }
    
    function get() {
        echo $this->title . "<br>";
        echo $this->page . "<br>";
        echo $this->copyright . "<br>";
        echo $this->year . "<br>";
    }
}
