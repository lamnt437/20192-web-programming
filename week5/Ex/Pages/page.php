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
    
    function addHeader() {
        echo "Header of the page!<br>";
    }
    
    function addContent($content) {
        echo $content . "<br>";
    }
    
    function addFooter() {
        echo "Footer of the page!<br>";
    }
    
    function get() {
        echo $page . "<br>" . $title . "<br>" . $year . "<br>" . $copyright . "<br>";
    }
}
