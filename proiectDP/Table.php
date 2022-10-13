<?php
class Table{

    private $title;


    function __construct($title) {
        $this->title = $title;
    }

    function print(){
        echo $this->title;
    }
}

?>