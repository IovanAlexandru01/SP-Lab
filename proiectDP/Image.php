<?php
require_once("Element.php");
class Image implements Element{

    private $imageName;

    function __construct($imageName) {
        $this->imageName = $imageName;
    }

    function add($element){
        array_push($this->elementList, $element);
    }

    function get($element){

    }

    function remove($element){
        
    }

    function print(){
        echo "Image with name:".$this->imageName;
    }
}

?>