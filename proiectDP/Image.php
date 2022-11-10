<?php
require_once("Element.php");
class Image implements Element{

    private $imageName;

    function __construct($imageName) {
        sleep(5);
        $this->imageName = $imageName;
    }

    function add($element){
        array_push($this->elementList, $element);
    }

    function get($element){

    }

    function remove($element){
        
    }
    
    function accept($visitor) {
        $visitor->visitImage($this);
    }

    function print(){
        echo "Image with name:".$this->imageName;
    }
}

?>