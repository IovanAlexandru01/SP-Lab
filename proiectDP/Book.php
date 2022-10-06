<?php

class Book
{
    private $title;
    private $paragraphArray=[];
    private $imageArray=[];
    private $tableArray=[];

    function __construct($title) {
        $this->title = $title;
    }

    function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function setParagraphArray($paragraphArray){
        $this->paragraphArray = $paragraphArray;
     }
     
    public function getParagraphArray(){
        return $this->paragraphArray;
    }

    public function setImage($imageArray){
        $this->imageArray = $imageArray;
    }

    function getImage(){
        return $this->imageArray;
    }

    public function setTable($table){
        $this->table = $table;
    }

    function getTable(){
        return $this->tableArray;
    }

    function createNewParagraph($paragraph){
        array_push($this->paragraphArray, $paragraph);
    }

    function createNewImage($newImage){
        array_push($this->imageArray, $newImage);
    }

    function createNewTable($newTable){
        array_push($this->tableArray, $newTable);
    }

}

$carte = new Book('La vida loca');
$carte->createNewParagraph('Paragraph 1');
$carte->createNewParagraph('Paragraph 2');
$carte->createNewParagraph('Paragraph 3');
$carte->createNewImage('Image 1');
$carte->createNewParagraph('Paragraph 4');
$carte->createNewTable('Table 1');
$carte->createNewParagraph('Paragraph 5');


?> 