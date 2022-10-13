<?php
class Image{

    private $imageName;


    function __construct($imageName) {
        $this->imageName = $imageName;
    }

    

    function print(){
        echo $this->imageName;
    }
}

?>