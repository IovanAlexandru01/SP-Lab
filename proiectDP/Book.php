<?php
require_once('Author.php');
require_once('Chapter.php');

class Book
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

    function getChapter($index){
        return $this->chapterArray[$index];
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