<?php
require_once("Element.php");
class Paragraph implements Element{

    private $text;

    function __construct($text) {
        $this->text = $text;
    }

    function print(){
        echo $this->text;
    }
}

?>