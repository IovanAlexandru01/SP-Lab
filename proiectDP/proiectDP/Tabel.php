<?php
require_once("Element.php");
class Tabel implements Element{

    private $title;

    function __construct($title) {
        $this->title = $title;
    }

    function print(){
        echo $this->title;
    }
}

?>