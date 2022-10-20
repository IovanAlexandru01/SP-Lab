<?php
require_once("Element.php");
class Paragraph implements Element{

    private $text;

    function __construct($text) {
        $this->text = $text;
    }
    
    function add($element){
        array_push($this->elementList, $element);
    }

    function get($element){

    }

    function remove($element){
        
    }
    
    function print(){
        echo "Paragraph: ".$this->text;
    }
}

?>