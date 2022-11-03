<?php
require_once("Element.php");
class Paragraph implements Element{

    private $text;
    private $alignment;

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

    function setAlignment($alignment) {
        $this->alignment = $alignment;
    }
    
    function print(){
        if($this->alignment == NULL) {
        echo "Paragraph: ".$this->text;
        } else {
            $this->alignment->render($this->text);
        }

    }
}

?>