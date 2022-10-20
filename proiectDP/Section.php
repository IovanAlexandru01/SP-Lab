<?php
require_once("Element.php");
class Section implements Element {

    private $title;
    private $elementList=[];

    function __construct($title){
        $this->title = $title;
    }

    function add($element){
        array_push($this->elementList, $element);
    }

    function get($element){

    }

    function remove($element){

    }
    function print(){
        echo $this->title;
        foreach($this->elementList as $element) {
            echo nl2br("\n");
            $element->print();
        }
    }

}