<?php
class Paragraph{

    private $text;


    function __construct($text) {
        $this->text = $text;
    }

    function print(){
        echo $this->text;
    }
}
$paragraf = new Paragraph('hello');
$paragraf->print();
?>