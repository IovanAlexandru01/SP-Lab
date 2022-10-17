<?php
require_once("Element.php");
class Image implements Element{

    private $imageName;

    function __construct($imageName) {
        $this->imageName = $imageName;
    }

    function print(){
        echo $this->imageName;
    }
}

?>