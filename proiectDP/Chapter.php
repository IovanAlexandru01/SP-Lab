<?php
require_once('SubChapter.php');
class Chapter{

    private $name;
    private $subChapterArray=[];
   
    function __construct($name) {
        $this->name = $name;
    }

    function print(){
        echo $this->name;
    }

    function createSubChapter($subChapter){
        $subcapitol = new SubChapter($subChapter);
        array_push($this->subChapterArray, $subcapitol);
        $index = sizeof($this->subChapterArray) - 1;
        return $index;
    }

    function getSubChapter($index){
        return $this->subChapterArray[$index];
    }
}

?>