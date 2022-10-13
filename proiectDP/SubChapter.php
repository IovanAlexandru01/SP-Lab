<?php
class SubChapter{

    private $name;
    private $paragraphArray=[];
    private $imageArray=[];
    private $tableArray=[];

    function __construct($name) {
        $this->name = $name;
    }

    function createNewParagraph($paragraph){
        array_push($this->paragraphArray, $paragraph);
    }

    function createNewImage($image){
        array_push($this->imageArray, $image);
    }

    function createNewTable($table){
        array_push($this->tableArray, $table);
    }

    function print(){
        echo $this->name;
        foreach($paragraphArray as $paragraf){
// de instantiat obiectele paragraf, image si table, si de printat
        }
    }
}

?>