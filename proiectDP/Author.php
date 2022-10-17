<?php
class Author{

    private $name;

    function __construct($name) {
        $this->name = $name;
    }

    function print(){
        echo $this->name;
    }
}

?>