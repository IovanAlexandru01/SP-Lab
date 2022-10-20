<?php
require_once('Author.php');
require_once('Section.php');

class Book extends Section
{
    private $title;
    private $paragraphArray=[];
    private $imageArray=[];
    private $tableArray=[];
    private $chapterArray=[];
    private $author;

    function __construct($title) {
        $this->title = $title;
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

    function addAuthor($author){
        $this->author = $author;
    }
    
    function createChapter($chapter){
        $capitol = new Chapter($chapter);
        array_push($this->chapterArray, $capitol);
        $index = sizeof($this->chapterArray) - 1;
        return $index;
    }

    function addContent($element){
        parent::add($element);
    }

    function getChapter($index){
        return $this->chapterArray[$index];
    }

    function print(){
        echo nl2br("Book: ".$this->title."\n");
        echo nl2br("\n");
        echo nl2br("Authors: "."\n");
        echo("Author: ");
        echo nl2br($this->author->print()."\n");
        parent::print();
    }

}

?> 