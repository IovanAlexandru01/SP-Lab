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

    
    public function add($element) {

    }

    public function remove($element) {

    }

    public function get($element) {

    }

    public function accept($visitor) {
        $visitor->visitTable($this);
    }
}

?>