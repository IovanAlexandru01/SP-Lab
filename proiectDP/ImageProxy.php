<?php
require_once("Element.php");
require_once("Image.php");
class ImageProxy implements Element {

    private $url;
    private $dimension;
    private $realImage;

    function __construct($url){
        $this->url = $url;
        $this->realImage = null;
    }

    function loadImage() {
        if($this->realImage == null) {
            $this->realImage = new Image($this->url);        
        }
        return $this->realImage;
    }
    public function add($element) {

    }
    public function remove($element) {

    }
    public function get($element) {
        
    }


    function print() {
        $realImage = $this->loadImage();
        echo $realImage->print();
    }
}



?>